from aiogram import Bot, Dispatcher, types, executor
from aiogram.contrib.fsm_storage.memory import MemoryStorage
from aiogram.dispatcher.filters import Text
import logging
import sys
import asyncio
import requests

TOKEN = "7132565832:AAGGawKwBSZuGwSfGBAoUwv21nbH-IQhXuM"  # Replace with your token

# Create bot instance
bot = Bot(TOKEN)
storage = MemoryStorage()
dp = Dispatcher(bot, storage=storage)


@dp.message_handler(commands=['start'])
async def command_start_handler(message: types.Message) -> None:
    """
    This handler receives messages with `/start` command
    """
    keyboard = types.InlineKeyboardMarkup()
    main_keyboard = types.ReplyKeyboardMarkup(resize_keyboard=True)
    main_keyboard.row('Играть')
    await message.answer(f"Привет, {message.from_user.full_name}!", reply_markup=main_keyboard)


@dp.message_handler(Text(equals='Играть'))
async def function_play(message: types.Message):
    """
    PLAY
    """
    user_id = message.from_user.id
    username = message.from_user.username
    response = requests.get(f'http://37.46.134.113:90/api/v1/auth/token?tgId={user_id}&tgLogin={username}')
    if response.status_code == 200:
        token = response.json()['data']['token']
        deeplink = 'http://37.46.134.113:91?token={token}'
        # Отправка сообщения с deeplink
        await message.answer(f'Ссылка на <a href="{deeplink}">клиент</a>', parse_mode='HTML')
    else:
        await message.answer("Failed to retrieve token")


if __name__ == '__main__':
    executor.start_polling(dp, skip_updates=True)

## Password Generator

Библиотека для генерации случайных паролей.

### Описание

`andrey-yurchuk/password-generator` — это библиотека для генерации криптографически стойких случайных паролей 
заданной длины и набора символов. Полезна для создания паролей, токенов, одноразовых ссылок и других секретных строк.

### Требования

- PHP >= 7.4
- Composer 2.0+

### Установка

Пакет опубликован на [Packagist](https://packagist.org/packages/andrey-yurchuk/password-generator). Чтобы установить его в ваш проект, выполните:

```bash
composer require andrey-yurchuk/password-generator
```

### Использование

```bash
// 1. Генерация пароля по умолчанию (16 символов)
$defaultGen = new PasswordGenerator();
echo "Default (16): " . $defaultGen->generate() . PHP_EOL;

// 2. Генерация числового пароля длиной 8 символов
$digitsGen = new PasswordGenerator(8, '0123456789');
echo "Digits (8): " . $digitsGen->generate() . PHP_EOL;

// 3. Генерация пароля из пользовательского набора символов
$customChars = 'ABCDEF!@#';
$customGen = new PasswordGenerator(12, $customChars);
echo "Custom (12+set): " . $customGen->generate() . PHP_EOL;
```
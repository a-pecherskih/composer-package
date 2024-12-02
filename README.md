## EmailVerifier

`PetrovaA\VerifyEmail\EmailVerifier`

Проверка валидности email строки

```php
use PetrovaA\VerifyEmail\EmailVerifier;

$email = 'test@mail.ru';

$check1 = EmailVerifier::verifyEmail(email: $email);
$check2 = EmailVerifier::verifyEmail(email: $email, checkDNS: true);

```
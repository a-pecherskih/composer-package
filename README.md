## EmailVerifier

`PetrovaA\VerifyEmail\EmailVerifier`

Проверка валидности email строки

```php
use PetrovaA\VerifyEmail\EmailVerifier;

$check1 = EmailVerifier::verifyEmail($email);
$check2 = EmailVerifier::verifyEmail($email, true);

```
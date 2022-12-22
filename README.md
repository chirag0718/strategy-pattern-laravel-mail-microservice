# Strategy Pattern in Laravel Mail-Microservice

In Laravel, the implementation of the Strategy Pattern. MailJet and SendGrid are our two email providers, and either one may be utilised in the event that the other becomes unavailable. The Strategy Pattern is fantastic for handling a number of different proviers.

## Installation

Use the composer manager to install Laravel. 

```bash
composer create-project laravel/laravel example-app
```

## Strategy Pattern Structure

```php
# MailService Interface
/**
 * Mail Interface
 * @author Chiragkumar Patel
 */
interface MailInterface
{
    /**
     * method is responsible to send email
     * @return int
     */
    public function send(): JsonResponse;
}

# Send mail through'SendGrid'
class SendGridService implements MailInterface
{
    public function send(): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'message' => "SendGrid called and email sent"
        ]);
    }
}

# Send mail through'MailJet'
class MailJetService implements MailInterface
{

    public function send(): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'message' => "MailJet called and email sent"
        ]);

    }
}

```

## Author
Chiragkumar Patel

## License

[MIT](https://choosealicense.com/licenses/mit/)

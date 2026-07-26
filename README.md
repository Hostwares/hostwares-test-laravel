# Hostwares Test - Laravel 11

A Laravel 11 app for testing PHP deployment on Hostwares.

## Environment Variables

| Variable | Description | Required |
|----------|-------------|----------|
| APP_NAME | Application name | No |
| APP_KEY | Laravel encryption key | Yes |
| DB_HOST | Database host | Yes |
| DB_DATABASE | Database name | Yes |
| DB_USERNAME | Database user | Yes |
| DB_PASSWORD | Database password | Yes |
| MAIL_MAILER | Mail driver (smtp/ses) | No |
| REDIS_HOST | Redis server host | No |

## Deploy on Hostwares

1. Create a new site → select this repo
2. Set all required env vars (especially APP_KEY)
3. Deploy!

The Dockerfile handles PHP-FPM + Nginx via supervisord.

## Using artisan

php artisan migrate:fresh --seed && php artisan migrate:refresh --path=database/migrations/db_functions

## For docker compose use

alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'

sail artisan migrate:fresh --seed && sail artisan migrate --path=database/migrations/db_functions

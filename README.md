# Dopo aver clonato lanciare
- npm i
- composer install
- cp .env.example .env 
- php artisan key:generate

## AVVIARE SEVER
- php artisan serve  
### IN UN SECONSO TERMINALE
- npm run dev


## CMD utili
- php artisan make:controller PageController
- php artisan make:model NomeSingolarePrimaLetteraMaiuscola
- php artisan make:migration nome_della_migration
- php artisan make:migration create_users_table
- php artisan make:migration update_users_table --table=users
- php artisan make:migration add_phone_nunber_to_users_table
- php artisan migrate --help
- php artisan migrate:rollback
- php artisan migrate:status
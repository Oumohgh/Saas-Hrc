# Saas-Hrc

SaaS project

## Installation

```bash
composer install
cp .env.example .env
php bin/console doctrine:migrations:migrate
symfony server:start

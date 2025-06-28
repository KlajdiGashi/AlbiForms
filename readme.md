## Instructions on running
```bash
pnpm install
pnpm approve-builds # Press "a" + Enter if prompted
pnpm build

# Create SQLite database file if it doesn't exist
node -e "const fs = require('fs'); const path = 'database/database.sqlite'; if (!fs.existsSync(path)) fs.writeFileSync(path, '');"

composer install
php artisan migrate:fresh --seed

# Start Vite dev server
composer run dev
```

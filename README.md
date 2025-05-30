# PAPS Stat Plugin for SeAT 5.x

The **PAPS Stat** plugin collects and displays Alliance PAPS statistics and user activity for [SeAT 5.x](https://github.com/eveseat/seat).

---

## Features

- **Automatic statistics collection** from a protected page (PAPS, Last on Forums, Last on Jabber, Last on Mumble)
- **Change history:** only saves new or changed values
- **View statistics** in the SeAT UI — split by category
- **Regular updates** (can be scheduled via cron)
- **Event logging** for troubleshooting

---

## Installation

1. **Requirements**
   - SeAT 5.x, PHP 8.1+, Laravel 10.x

2. **Install via composer**
   ```bash
   composer require vfjodorovs12/paps
   ```

   > If the package is only on GitHub:
   > ```bash
   > composer config repositories.paps vcs https://github.com/vfjodorovs12/paps
   > composer require vfjodorovs12/paps:dev-main
   > ```

3. **Add .env variables for authentication**
   ```
   GOON_USERNAME=your_login
   GOON_PASSWORD=your_password
   ```

4. **Run migrations**
   ```bash
   php artisan migrate
   ```

5. **(Optional) Add the service provider**  
   SeAT should auto-register the plugin, but if not — add to `config/app.php`:
   ```php
   Vfjodorovs12\Paps\ServiceProvider::class,
   ```

---

## Usage

- The plugin automatically collects data (set up a cron job for regular updates if needed)
- The **Alliance PAPS** section will appear in the SeAT menu
- Tables are available for:
  - PAPS (90d/60d/30d)
  - Last on Forums
  - Last on Jabber
  - Last on Mumble

---

## Project Structure

```
src/
  ├── Http/
  │     └── Controllers/AllianceStatsController.php
  ├── Models/PapsStat.php
  ├── Services/PapsStatsFetcher.php
  ├── ServiceProvider.php
  └── Config/paps.sidebar.php
database/
  └── migrations/2024_05_28_000000_create_paps_stats_table.php
resources/
  └── views/index.blade.php
routes/
  └── web.php
README.md
```

---

## UI Example

- **Menu:** Alliance PAPS
- **Tables:** By PAPS, forum, Jabber, Mumble, grouped by user

---

## Logging and Debugging

- All actions are logged via the Laravel Log (`storage/logs/laravel.log`)
- For troubleshooting, look for `[PapsStatsFetcher]` messages

---

## Support

- [GitHub Issues](https://github.com/vfjodorovs12/paps/issues)
- [SeAT Discord](https://discord.gg/eveseat)

---

## License

MIT

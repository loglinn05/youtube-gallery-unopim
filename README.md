# YouTube Gallery Plugin

This plugin adds a YouTube Gallery page to the UnoPim installation. It allows you to easily add YouTube videos to your
website.

## Setup

To set up the admin panel with this plugin, create a database named `youtube_gallery`, and run the following commands at
the project root:

```bash
composer install
php artisan migrate
cd packages/Extra/YouTubeGallery
npm install
```

## Usage

Run the following command at the project root to start the server:

```bash
php artisan serve
```

Go to the root directory of the package (packages/Extra/YouTubeGallery) and run:

```bash
npm run dev
```

Visit http://localhost:8000/admin to access the admin panel.

## Credentials

E-mail: admin@example.com

Password: l0v3lyBuG

# Watt Next WordPress

A full-stack application combining Next.js frontend with WordPress backend, orchestrated using Platformatic's Watt framework.

## Project Structure

This project consists of three main services:

- **`web/my-app`** - Next.js frontend application with React 19 and Tailwind CSS
- **`web/wp`** - WordPress backend powered by Platformatic PHP
- **`web/composer`** - Platformatic Composer service acting as the main orchestrator

## Prerequisites

- Node.js >= 22.14.0
- All PHP binary dependencies installed as listed in https://github.com/platformatic/php-node
- MySQL run via Docker (`docker compose up` in this directory)

This `.env` file is required for the project to run (you can copy it with `cp .env.sample .env`):

```
PLT_SERVER_HOSTNAME=127.0.0.1
PORT=3000
PLT_SERVER_LOGGER_LEVEL=info
PLT_MANAGEMENT_API=true
PLT_COMPOSER_TYPESCRIPT=false
PLT_COMPOSER_EXAMPLE_ORIGIN=http://127.0.0.1:3043
PLT_WP_TYPESCRIPT=false
```

## Installation

Install dependencies for all workspaces:

```bash
npm install
```

## Development

Start the development environment:

```bash
npm run dev
```

This will start all services in development mode with hot reload enabled.

When running the app, if you encounter an error like:

```shell
Error: dlopen(watt-next-wordpress/node_modules/@platformatic/php-node/npm/darwin-arm64/binding.node, 0x0001): Library not loaded: /opt/homebrew/opt/libzip/lib/libzip.5.dylib
Referenced from: <B4F93CE8-65CC-30C7-BEB2-43FF17C67FB5> watt-next-wordpress/node_modules/@platformatic/php-node/npm/darwin-arm64/libphp.dylib
Reason: tried: '/opt/homebrew/opt/libzip/lib/libzip.5.dylib' (no such file), '/System/Volumes/Preboot/Cryptexes/OS/opt/homebrew/opt/libzip/lib/libzip.5.dylib' (no such file), '/opt/homebrew/opt/libzip/lib/libzip.5.dylib' (no such file)
```

be sure that such libraries are installed on your maching. For instance, on a Macbook, you can install it with `brew install libzip`.

## Production

Build all services:

```bash
npm run build
```

Start in production mode:

```bash
npm start
```

## Services

### Frontend (Next.js)

- **Location**: `web/my-app/`
- **Framework**: Next.js 15.3.2 with React 19
- **Styling**: Tailwind CSS v4
- **TypeScript**: Fully typed

### Backend (WordPress)

- **Location**: `web/wp/`
- **Runtime**: Platformatic PHP
- **Content**: Standard WordPress installation

### Composer

- **Location**: `web/composer/`
- **Purpose**: Service orchestration and API composition
- **Framework**: Platformatic Composer

## Configuration

The project is configured through:

- `watt.json` - Main Watt runtime configuration
- Individual `platformatic.json` files in each service directory
- `package.json` workspaces configuration

## Scripts

- `npm run dev` - Start development environment
- `npm run build` - Build all services
- `npm start` - Start production environment

## Architecture

This application follows a microservices architecture where:

1. The Composer service acts as the main entry point
2. Next.js provides the frontend experience
3. WordPress serves as the content management system
4. All services are orchestrated through Platformatic Watt

## License

This project is licensed under the Apache License 2.0. See the [LICENSE](LICENSE) file for details.

**Note**: The WordPress installation included in this project (`web/wp/public`) is released under the GNU General Public License (GPL) version 2 or later. See the WordPress license file at `web/wp/public/license.txt` for full GPL license terms.

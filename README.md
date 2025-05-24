# Watt Next WordPress

A full-stack application combining Next.js frontend with WordPress backend, orchestrated using Platformatic's Watt framework.

## Project Structure

This project consists of three main services:

- **`web/my-app`** - Next.js frontend application with React 19 and Tailwind CSS
- **`web/wp`** - WordPress backend powered by Platformatic PHP
- **`web/composer`** - Platformatic Composer service acting as the main orchestrator

## Prerequisites

- Node.js >= 18.8.0 (or >= 20.6.0)
- PHP (for WordPress backend)

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

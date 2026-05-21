# RossDashboard

A web-based network operations dashboard for **Ross Ragland Theater** IT staff. The application provides a single place to view network assets, VLAN segments, credential roles, and activity summaries for the theater’s infrastructure.

Built as part of **MIS 322 — Systems Analysis and Design** (Spring 2026).

## Features

| Page | File | Description |
|------|------|-------------|
| **Login** | `login.php` | Entry point with username/password form (auth not yet implemented) |
| **Network Overview** | `dashboard.php` | Summary stat cards, SVG network topology diagram, and recent activity feed |
| **Network Assets** | `assets.php` | Searchable table of devices across all VLANs |
| **VLAN 10 Admin** | `vlans.php` | Asset table filtered to the Admin VLAN segment |
| **Credentials** | `credentials.php` | Expandable credential roles with systems access, audit logs, security info, and assignees |

### Network segments (VLANs)

- **VLAN 10 — Admin** — Core infrastructure (switches, NAS, firewall, admin PCs)
- **VLAN 20 — Guest** — Public/guest Wi-Fi
- **VLAN 30 — CCTV** — Security cameras
- **VLAN 40 — Events** — Event production and AV equipment

### UI components

- Shared sidebar navigation (`includes/sidebar.php`)
- Admin user badge with profile image modal (`includes/admin-user.php`, `includes/admin-image-modal.php`)
- Responsive layout and VLAN/status styling (`assets/css/styles.css`)

## Tech stack

- **PHP** — Server-side page rendering and includes
- **HTML / CSS** — Layout, tables, stat cards, network diagram
- **JavaScript** — Admin profile modal (`assets/js/admin-popup.js`)

No database or authentication backend is wired up yet; pages use static sample data (credentials are defined in a PHP array in `credentials.php`).

## Project structure

```
Dashboard project/
├── index.php              # Redirects to login.php
├── login.php
├── dashboard.php
├── assets.php
├── vlans.php
├── credentials.php
├── includes/
│   ├── sidebar.php
│   ├── admin-user.php
│   └── admin-image-modal.php
└── assets/
    ├── css/styles.css
    ├── js/admin-popup.js
    └── images/
```

## Getting started

### Requirements

- PHP 8.0+ with a built-in web server, or Apache/Nginx (e.g. XAMPP, WAMP, Laragon)

### Run locally

From the project root:

```bash
cd "Dashboard project"
php -S localhost:8000
```

Open [http://localhost:8000/login.php](http://localhost:8000/login.php). Submitting the login form currently navigates directly to the dashboard without validating credentials.

### Deploy

Point your web server document root at the `Dashboard project` folder. Ensure PHP is enabled and `index.php` is the default entry file.

## Roadmap

- [ ] User authentication and session management
- [ ] Database integration for assets, VLANs, credentials, and audit logs
- [ ] Live asset search and filtering
- [ ] Audit Logs page (sidebar link is placeholder `#`)
- [ ] Dynamic sync status and dashboard statistics

## Repository

[https://github.com/Ayagla/RossDashboard.git](https://github.com/Ayagla/RossDashboard.git)

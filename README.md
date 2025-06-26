# GivingTalents.org

A Laravel-powered platform dedicated to building a movement of radical love through giving and receiving talents, skills, and treasure. GivingTalents.org connects community members to share their unique abilities and create meaningful impact together.

## About

GivingTalents.org is a community-driven platform that facilitates:
- **Talent Sharing**: Connect individuals who want to share their skills with those who need them
- **Community Building**: Foster meaningful relationships through shared experiences
- **Social Events**: Host workshops, talent showcases, and networking gatherings
- **Impact Creation**: Enable community members to make a difference through their unique abilities

**Mission**: Building a movement of radical love through giving and receiving talents, skills, and treasure.

## Features

- **Modern Laravel Framework**: Built with Laravel for robust backend functionality
- **Responsive Design**: Beautiful, mobile-friendly interface with glass morphism design
- **Social Integration**: Connected with Facebook, Twitter, and Instagram
- **Event Management**: Support for workshops, talent showcases, and community gatherings
- **Contact System**: Easy communication channels for community engagement
- **Automated Deployment**: Seamless deployment pipeline to SiteGround hosting

## Technology Stack

- **Backend**: Laravel (PHP Framework)
- **Frontend**: Blade Templates, Tailwind CSS
- **Styling**: Glass morphism design with purple brand colors
- **Database**: MySQL (via SiteGround hosting)
- **Deployment**: GitHub Actions with SSH deployment to SiteGround
- **Hosting**: SiteGround shared hosting

## Getting Started

### Prerequisites

- PHP >= 8.1
- Composer
- Node.js >= 16
- MySQL or compatible database

### Local Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/mdleung/givingtalents.git
   cd givingtalents
   ```

2. **Install PHP dependencies**:
   ```bash
   composer install
   ```

3. **Install Node.js dependencies** (if using asset compilation):
   ```bash
   npm install
   ```

4. **Set up environment variables**:
   ```bash
   cp .env.example .env
   ```
   
   Edit `.env` with your configuration:
   ```env
   APP_NAME="GivingTalents"
   APP_ENV=local
   APP_KEY=
   APP_DEBUG=true
   APP_URL=http://localhost:8000

   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=givingtalents
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

5. **Generate application key**:
   ```bash
   php artisan key:generate
   ```

6. **Run database migrations**:
   ```bash
   php artisan migrate
   ```

7. **Compile assets** (if needed):
   ```bash
   npm run dev
   ```

8. **Start the development server**:
   ```bash
   php artisan serve
   ```

9. **Visit your application**: Open `http://localhost:8000` in your browser

### Production Build

For production deployment:
```bash
composer install --no-dev --optimize-autoloader
php artisan config:cache
php artisan route:cache
php artisan view:cache
npm run production  # If using asset compilation
```

## Project Structure

```
givingtalents/
├── app/                          # Application logic
├── bootstrap/                    # Framework bootstrap files
├── config/                      # Configuration files
├── database/                    # Database migrations and seeders
├── public/                      # Web server document root
├── resources/                   # Views, assets, and language files
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php   # Main layout template
│       └── pages/
│           ├── contact.blade.php        # Contact page
│           └── social-events.blade.php  # Events page
├── routes/                      # Route definitions
├── storage/                     # Generated files, logs, cache
├── tests/                       # Automated tests
├── vendor/                      # Composer dependencies
├── .github/workflows/           # GitHub Actions deployment
├── composer.json               # PHP dependencies
└── package.json               # Node.js dependencies (if used)
```

## Deployment

This project uses automated deployment via GitHub Actions to SiteGround hosting.

### Deployment Process

1. **Push to main branch** triggers automatic deployment
2. **Laravel core files** are synced to `~/laravel/` directory
3. **Public files** are synced to `~/public_html/`
4. **Composer dependencies** are automatically installed
5. **Application is live** at https://givingtalents.org

### Manual Deployment

For manual deployment or testing:
```bash
# Use the siteground.yml workflow
gh workflow run siteground.yml
```

## Development Guidelines

### Code Style
- Follow Laravel coding standards
- Use Blade templates for views
- Maintain consistent indentation and naming conventions

### Adding New Features
1. Create feature branches from `main`
2. Implement changes following Laravel best practices
3. Test locally before pushing
4. Create pull requests for review

### Database Changes
- Always create migrations for database changes
- Include both up and down methods
- Test migrations on fresh database

## Environment Variables

Required environment variables for production:

```env
# Application
APP_NAME="GivingTalents"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://givingtalents.org

# Database
DB_CONNECTION=mysql
DB_HOST=your_database_host
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password

# Mail (if using email features)
MAIL_DRIVER=smtp
MAIL_HOST=your_smtp_host
MAIL_PORT=587
MAIL_USERNAME=your_email
MAIL_PASSWORD=your_email_password
```

## Social Media Integration

The platform integrates with:
- **Facebook**: [@givingtalents](https://www.facebook.com/givingtalents)
- **Twitter**: [@givingtalents](https://www.twitter.com/givingtalents)
- **Instagram**: [@GIVINGtalents](http://instagram.com/GIVINGtalents)

## Pages and Features

### Main Pages
- **Home**: Welcome page with mission and call-to-action
- **About**: Information about the movement and community
- **Events**: Social events, workshops, and talent showcases
- **Contact**: Get in touch with the community

### Event Types
- **Talent Showcases**: Community members demonstrate their skills
- **Workshops**: Educational sessions and skill-sharing
- **Networking Gatherings**: Informal meetups and relationship building

## Contributing

We welcome contributions to grow the GivingTalents community platform:

1. **Fork the repository**
2. **Create a feature branch**: `git checkout -b feature/amazing-feature`
3. **Make your changes** following Laravel best practices
4. **Test thoroughly** in local environment
5. **Commit your changes**: `git commit -m 'Add amazing feature'`
6. **Push to your branch**: `git push origin feature/amazing-feature`
7. **Open a Pull Request**

### Development Setup for Contributors
- Ensure you have Laravel development environment set up
- Run `php artisan test` to execute test suite
- Check code style with Laravel Pint: `./vendor/bin/pint`

## Testing

Run the test suite:
```bash
# Run all tests
php artisan test

# Run specific test file
php artisan test tests/Feature/ExampleTest.php

# Run with coverage
php artisan test --coverage
```

## License

This project is open source. Please respect the community-driven nature of the platform.

## Contact & Support

- **Website**: [givingtalents.org](https://givingtalents.org)
- **GitHub**: [@mdleung](https://github.com/mdleung)
- **Repository**: [mdleung/givingtalents](https://github.com/mdleung/givingtalents)

For questions about the platform or community:
- Visit the [Contact page](https://givingtalents.org/contact)
- Follow us on social media for updates
- Open GitHub issues for technical problems

## Community

Join our movement of radical love:
- **Share your talents** with community members
- **Attend events** and workshops
- **Connect with others** who want to make a difference
- **Follow our journey** on social media

## Acknowledgments

- Built with Laravel framework
- Styled with Tailwind CSS
- Hosted on SiteGround
- Deployed via GitHub Actions
- Inspired by the desire to build community through shared talents

## Recent Updates

*Last updated: June 26, 2025*

- Automated deployment pipeline active
- Social media integration complete  
- Event management system implemented
- Community contact system operational

---

**Building a movement of radical love through giving and receiving talents, skills, and treasure.**

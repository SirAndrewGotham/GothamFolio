# GothamFolio - Personal Portfolio Website

A modern, responsive portfolio website built with Laravel 12, Livewire, Volt, and Folio. Features a beautiful design with dark mode support and a fully functional feedback system.

## 🚀 Features

- **Modern Tech Stack**: Laravel 12 + Livewire + Volt + Folio
- **Responsive Design**: Mobile-first approach with Tailwind CSS
- **Dark Mode Support**: Automatic dark/light theme switching
- **Interactive Components**: Alpine.js for client-side interactivity
- **Feedback System**: Contact form with database storage and email notifications
- **Multi-section Layout**: Hero carousel, features, resume, portfolio, galleries, blog, and contacts
- **Future Multilingual Support**: Planned internationalization features

## 🛠️ Tech Stack

- **Backend**: Laravel 12, PHP 8.3+
- **Frontend**: Livewire, Volt, Alpine.js, Tailwind CSS 4
- **Routing**: Laravel Folio for page-based routing
- **Database**: SQLite (default), supports MySQL/PostgreSQL
- **Build Tool**: Vite
- **Icons**: Font Awesome 7

## 📦 Installation

1. **Clone the repository**
   ```bash
   git clone <your-repo-url>
   cd gothamfolio
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Setup environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Configure database**
   ```bash
   # For SQLite (default)
   touch database/database.sqlite
   
   # Or configure MySQL/PostgreSQL in .env
   ```

5. **Run migrations**
   ```bash
   php artisan migrate
   ```

6. **Build assets**
   ```bash
   npm run build
   ```

7. **Start development server**
   ```bash
   php artisan serve
   ```

## 🎨 Project Structure

```
gothamfolio/
├── app/
│   ├── Livewire/          # Livewire Volt components
│   ├── Mail/             # Email templates and logic
│   ├── Models/           # Database models
│   └── View/Components/  # Blade components
├── resources/
│   ├── views/
│   │   ├── components/   # Reusable UI components
│   │   ├── livewire/     # Livewire component views
│   │   └── pages/        # Folio pages
│   ├── css/              # Stylesheets
│   └── js/               # JavaScript files
└── database/
    ├── migrations/       # Database migrations
    └── seeders/         # Database seeders
```

## 📧 Email Configuration

To enable email notifications for feedback:

1. **Configure mail settings** in `.env`:
   ```env
   MAIL_MAILER=smtp
   MAIL_HOST=your-smtp-host
   MAIL_PORT=587
   MAIL_USERNAME=your-email
   MAIL_PASSWORD=your-password
   MAIL_FROM_ADDRESS=your-email@example.com
   MAIL_FROM_NAME="Your Name"
   MAIL_TO_ADDRESS=admin@example.com
   ```

2. **Available mail drivers**: smtp, mailgun, postmark, ses, resend, log, array

## 🎯 Key Components

### Frontend Sections
- **Hero**: Interactive carousel with call-to-action buttons
- **Features**: Three-column feature highlights
- **Resume**: Professional experience and skills
- **Portfolio**: Project showcase with technology tags
- **Galleries**: Photo/art galleries
- **Blog**: Blog post previews
- **Contacts**: Contact information and feedback form

### Feedback System
- **Database Model**: `Feedback` with soft deletes
- **Livewire Component**: `FeedbackForm` with validation
- **Email Notification**: `FeedbackReceived` mail class
- **Validation**: Comprehensive form validation rules

## 🚀 Development Commands

```bash
# Setup project (first time)
composer run setup

# Start development servers
composer run dev

# Build for production
npm run build

# Run tests
composer run test

# Code formatting
./vendor/bin/pint
```

## 🌐 Environment Variables

Key environment variables to configure:

```env
APP_NAME="GothamFolio"
APP_URL=http://localhost:8000

DB_CONNECTION=sqlite
# DB_DATABASE=/absolute/path/to/database.sqlite

MAIL_MAILER=log
MAIL_TO_ADDRESS=your-admin-email@example.com
```

## 📱 Responsive Design

The website is fully responsive with breakpoints:
- **Mobile**: < 768px
- **Tablet**: 768px - 1024px
- **Desktop**: > 1024px

## 🎨 Customization

### Colors
Primary color palette defined in `tailwind.config.js`:
- Primary: Blue gradient (50-900)
- Custom gradients and glass effects

### Components
All components are located in `resources/views/components/frontend/` and can be easily modified.

## 🔮 Future Features

- **Multilingual Support**: Internationalization (i18n) implementation
- **Content Management**: Admin panel for content updates
- **Blog System**: Full-featured blogging capabilities
- **Image Optimization**: Advanced image handling for galleries
- **SEO Optimization**: Enhanced search engine optimization

## 🤝 Contributing

1. Fork the project
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 📄 License

This project is open source and available under the [MIT License](LICENSE).

## 🆘 Support

If you have any questions or issues, please open an issue on GitHub or contact through the feedback form on the website.

---

Built with ❤️ using Laravel, Livewire, and Tailwind CSS.

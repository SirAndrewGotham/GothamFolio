# GothamFolio - DeepSeek Context Documentation

## Project Structure & Architecture

### Directory Organization
- Traditional MVC: Controllers in app/Http/Controllers/ with Admin/Frontend subdirectories
- File-based Routing: Folio routes in resources/views/pages/ with automatic routing
- Concerns-based Models: Extensive use of traits in app/Concerns/ for reusable functionality
- Service Layer: Dedicated services in app/Services/ for business logic

### Key Architectural Patterns
- Hybrid Architecture: Combines traditional MVC controllers with Folio file-based routing
- Trait-based Model Design: Models use concerns like HasTranslations, HasSlug, HasCategories
- Database-driven Localization: Language management stored in database with session-based locale
- Service Layer Pattern: Business logic extracted to service classes (LanguageService, PortfolioImageService)

## Technical Stack & Dependencies

### Core Technologies
- Laravel 12 with PHP 8.3+
- Livewire 3 with Volt for interactive components
- Laravel Folio for file-based routing
- Tailwind CSS 4 with dark mode support
- Alpine.js for client-side interactivity
- SQLite (development), supports MySQL/PostgreSQL

### Key Packages

```json
{
    "laravel/folio": "^1.1",
    "laravel/fortify": "^1.30",
    "livewire/flux": "^2.1.1",
    "livewire/volt": "^1.7.0",
    "intervention/image": "^3.11",
    "pestphp/pest": "^4.1"
}
```

### Database Configuration
- SQLite default with multi-database support
- Complex relationships with polymorphic translations
- Soft deletes implemented across most models

## Code Conventions & Standards

### Naming Conventions
- Controllers: Admin/PostController, Frontend/PostController
- Models: Singular names with concern traits (Post, Project)
- Views: Blade components with Flux UI integration
- Routes: Folio file-based naming (pages/blog/[slug].blade.php)

### Validation Approach
- FormRequest Classes: Extensive use in app/Http/Requests/ (28+ request classes)
- Inline Validation: Minimal, primarily in Livewire components
- Custom Rules: Database-driven validation for translations

### Error Handling
- Custom Middleware: Localization middleware for language handling
- Exception Handling: Standard Laravel patterns with custom logging
- Validation Messages: Multi-language support through translation system

### Testing Structure
- Pest Framework: Feature and unit tests with Pest syntax
- Test Organization: tests/Feature/ and tests/Unit/ directories
- Model Factories: Comprehensive factories for all models

## Business Domain Insights

### Core Models & Relationships

```json
// Post model with extensive relationships
class Post extends Model
{
    use HasCategories, HasSlug, HasTags, HasViews, HasVotes, SoftDeletes;
    
    // Relationships: author, originalPost, language, comments
    // Scopes: published, featured, draft, scheduled
}
```

```json
// Project model with translation support
class Project extends Model
{
    use HasCategories, HasCompetences, HasSlug, HasTranslations, SoftDeletes;
    
    // Relationships: projectType, images
    // Accessors: imageUrls, hasImages
}
```

### Main Feature Areas
- Portfolio Management: Projects with multi-language support
- Blog System: Posts with categories, tags, and commenting
- Competence Showcase: Skills/technologies with detailed pages
- Gallery System: Image management with multiple galleries
- Multi-language Content: Database-driven translations

### Domain Patterns
- Translation System: Central translations table with polymorphic relationships
- Slug Generation: Auto-generated slugs with unique constraints
- Content Grouping: Posts grouped by post_id for translations
- Feature Toggles: Config-driven feature enablement (gothamfolio.php)

## Development Setup

### Configuration Patterns
- Environment-based Features: Configurable through .env variables
- Database-driven Settings: Languages and translations stored in database
- Service Providers: Custom providers for Folio, Fortify, View composers

### Environment Setup
- Default Language: Russian (ru) with English fallback
- Session-based Locale: Browser detection with database fallback
- Dark Mode Support: Persistent through localStorage

### Migration & Seeding
- Complex Migrations: 32+ migrations with relationships and indexes
- Comprehensive Seeders: 23+ seeders with factory support
- Translation Data: JSON seed files for initial content

### Frontend Architecture
- Blade Components: Extensive component library in resources/views/components/
- Volt Integration: Interactive components using Livewire Volt
- Tailwind 4: CSS-first configuration with custom themes
- Font Awesome 7: Icon system throughout the application

## Key Implementation Details

### Translation System

```
// HasTranslations trait provides:
- getTranslation($key, $locale) with fallback support
- setTranslation($key, $value, $locale) 
- Current locale detection with session management
- Fallback to default locale (English)
```

### Folio Routing Structure

```
resources/views/pages/
├── blog/
│   ├── [slug].blade.php → /blog/{slug}
│   └── index.blade.php → /blog
├── portfolio/
│   ├── projects/[slug]/ → /portfolio/projects/{slug}
│   └── index.blade.php → /portfolio
└── competences/
    └── [slug].blade.php → /competences/{slug}
```

### Admin Panel Structure
- Route Prefix: /admin with named routes (admin.)
- Resource Controllers: CRUD operations for all entities
- Authentication: Laravel Fortify with custom views

### Content Management
- Soft Deletes: Implemented across most models
- Publishing Workflow: is_published and published_at fields
- Featured Content: is_featured flag for highlighting
- View Counting: HasViews trait for tracking engagement

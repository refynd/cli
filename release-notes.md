# 🛠️ Refynd CLI v1.0.1 - Symfony Console 7 Compatibility Fix

## 🚀 What's New

This patch release resolves critical compatibility issues with Symfony Console 7, ensuring all CLI commands work flawlessly.

## 🐛 Bug Fixes

- **Fixed**: Command naming compatibility with Symfony Console 7
- **Fixed**: "Command cannot have an empty name" errors for all commands
- **Updated**: Replaced deprecated static `$defaultName` properties with `setName()` method calls

## 📋 Commands Fixed

All CLI commands now work properly:

- ✅ `refynd new` - Create new Refynd applications
- ✅ `refynd make:controller` - Generate controller classes  
- ✅ `refynd make:model` - Generate model classes
- ✅ `refynd make:middleware` - Generate middleware classes
- ✅ `refynd serve` - Start development server
- ✅ `refynd test` - Run application tests

## 🔧 Technical Changes

- Migrated from deprecated `protected static $defaultName` properties to `setName()` method calls in `configure()`
- Updated all command classes for Symfony Console 7 compatibility
- Added comprehensive changelog documentation
- Enhanced version tracking in `composer.json`

## 📦 Installation & Upgrade

**New Installation:**
```bash
composer global require refynd/cli
```

**Upgrade Existing Installation:**
```bash
composer global update refynd/cli
```

## 🏆 Full Changelog

**Changed:**
- Command configuration now uses `setName()` method instead of static properties
- Improved compatibility with Symfony Console 7.x

**Fixed:**
- Resolved "Command cannot have an empty name" runtime errors
- Fixed command registration and discovery issues

**Added:**
- Version number in `composer.json` for better tracking
- Comprehensive `CHANGELOG.md` following Keep a Changelog format

---

**Full Changelog**: [v1.0.0...v1.0.1](https://github.com/refynd/cli/compare/v1.0.0...v1.0.1)

## 💝 Special Thanks

Thanks to the Symfony Console team for the excellent framework and clear migration guidance for v7 compatibility.

---

*Built with ❤️ by [Jade Monathrae Lewis](https://github.com/jademonathrae) - Founder & Creator of Refynd*

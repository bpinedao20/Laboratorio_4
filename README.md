<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## 📅 Nota del Proyecto
**Fecha de entrega: 05 de octubre de 2025**  
*Proyecto desarrollado Laboratorio 4*

## 🚀 Acerca del Proyecto

Este es el Laboratorio 4 desarrollado con el framework Laravel. El proyecto incluye funcionalidades de aplicación web moderna utilizando las mejores prácticas de desarrollo.

## ✨ Características Implementadas

- [ ] Arquitectura MVC
- [ ] Sistema de rutas
- [ ] Base de datos y migraciones
- [ ] Autenticación de usuarios
- [ ] CRUD completo
- [ ] Interfaz responsive

## 🛠 Tecnologías Utilizadas

- **Laravel 10+**
- **PHP 8.1+**
- **MySQL**
- **Bootstrap 5**
- **Composer**

## 📋 Requisitos del Sistema

- PHP >= 8.1
- Composer
- MySQL >= 5.7
- Node.js (opcional para assets)

## 🔧 Instalación

```bash
# Clonar el repositorio
git clone https://github.com/bpinedao20/Laboratorio_4.git

# Instalar dependencias
composer install

# Configurar environment
cp .env.example .env
php artisan key:generate

# Ejecutar migraciones
php artisan migrate

# Iniciar servidor
php artisan serve
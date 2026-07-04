# Sistema para Laboratorio Clínico

Sistema web básico para portafolio profesional desarrollado con **PHP, MySQL y Bootstrap**.

## Funcionalidades

- Login de administrador
- Dashboard
- Registro de pacientes
- Catálogo de estudios clínicos
- Registro de resultados
- Historial por paciente
- Reportes generales
- Diseño responsive con Bootstrap
- Base de datos MySQL incluida

## Tecnologías

- PHP 8+
- MySQL / MariaDB
- Bootstrap 5
- HTML5
- CSS3
- JavaScript

## Instalación local con XAMPP

1. Copia la carpeta `sistema-laboratorio-clinico` dentro de `htdocs`.
2. Crea una base de datos en phpMyAdmin llamada:

```sql
laboratorio_clinico
```

3. Importa el archivo:

```text
database/laboratorio_clinico.sql
```

4. Abre el proyecto en el navegador:

```text
http://localhost/sistema-laboratorio-clinico/
```

## Acceso demo

```text
Usuario: admin
Contraseña: admin123
```

## Estructura

```text
sistema-laboratorio-clinico/
├── assets/
├── config/
├── database/
├── includes/
├── patients/
├── tests/
├── results/
├── reports/
├── history/
├── index.php
└── dashboard.php
```

## Nota

Este sistema es ideal para mostrar en GitHub como proyecto de portafolio. Puede ampliarse con:
- PDF de resultados
- Roles de usuario
- Firma digital
- Código QR en reportes
- Envío de resultados por correo
- API REST

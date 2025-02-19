# 📥 Instalación del Sistema de Gestión de Pacientes

Sigue estos pasos para instalar y configurar el proyecto en tu máquina:

---

## 1️⃣ Clonar el Repositorio

Ejecuta el siguiente comando para clonar el repositorio e ingresar al directorio del proyecto:

```sh
git clone https://github.com/magSeven117/Sistema_Gestion_Pacientes.git
cd Sistema_Gestion_Pacientes
```

---

## 2️⃣ Instalar Dependencias

Instala las dependencias de PHP y Node.js necesarias para el proyecto:

```sh
composer install
npm install
```

---

## 3️⃣ Configurar Variables de Entorno

Copia el archivo de configuración y edita las credenciales de la base de datos:

```sh
cp .env.example .env
```

Modifica el archivo **.env** con las credenciales de tu base de datos:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pacientes_db
DB_USERNAME=root
DB_PASSWORD=
```

---

## 4️⃣ Generar Clave de Aplicación

Ejecuta el siguiente comando para generar una clave de aplicación:

```sh
php artisan key:generate
```

---

## 5️⃣ Ejecutar Migraciones y Seeders

Este comando creará las tablas y poblará la base de datos con datos iniciales:

```sh
php artisan migrate --seed
```

---

## 6️⃣ Compilar Tailwind CSS

Para que los estilos se apliquen correctamente, ejecuta el siguiente comando:

```sh
npm run dev
```

(O para producción, usa:)

```sh
npm run build
```

---

## 7️⃣ Iniciar el Servidor

Ejecuta el siguiente comando para iniciar el servidor:

```sh
php artisan serve
```

El sistema estará disponible en: 🔗 [**http://127.0.0.1:8000**](http://127.0.0.1:8000)

---

## 🔑 Credenciales de Prueba

Para acceder como administrador, usa las siguientes credenciales:

- **Usuario:** `100000001`
- **Contraseña:** `1234567890`

---

## ⚙ Comandos Útiles

- **Limpiar caché de configuración y vistas:**
  ```sh
  php artisan config:clear && php artisan view:clear
  ```
- **Ejecutar migraciones desde cero:**
  ```sh
  php artisan migrate:fresh --seed
  ```
- **Compilar Tailwind CSS en producción:**
  ```sh
  npm run build
  ```


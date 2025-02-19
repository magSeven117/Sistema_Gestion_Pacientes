📥 1️⃣ Instalación
Sigue estos pasos para instalar y configurar el proyecto en tu máquina:

1️⃣ Clonar el Repositorio
sh
Copy code
git clone https://github.com/magSeven117/Sistema_Gestion_Pacientes.git
cd Sistema_Gestion_Pacientes
2️⃣ Instalar Dependencias
Ejecuta los siguientes comandos para instalar las dependencias de PHP y Node.js:

sh
Copy code
composer install
npm install
3️⃣ Configurar Variables de Entorno
Copia el archivo de configuración:
sh
Copy code
cp .env.example .env
Configura las credenciales de la base de datos en el archivo .env:
env
Copy code
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pacientes_db
DB_USERNAME=root
DB_PASSWORD=
4️⃣ Generar la Clave de la Aplicación
sh
Copy code
php artisan key:generate
5️⃣ Ejecutar Migraciones y Seeders
sh
Copy code
php artisan migrate --seed
Esto creará las tablas y poblará la base de datos con datos iniciales.

6️⃣ Compilar Tailwind CSS
Para que los estilos se apliquen correctamente, ejecuta:

sh
Copy code
npm run dev
(O para producción, usa npm run build)

7️⃣ Iniciar el Servidor
sh
Copy code
php artisan serve
El sistema estará disponible en:
👉 http://127.0.0.1:8000

🔑 Credenciales de Prueba
Para acceder como administrador:

makefile
Copy code
Usuario: 100000001
Contraseña: 1234567890
⚙ Comandos Útiles
Limpiar caché de configuración y vistas
sh
Copy code
php artisan config:clear && php artisan view:clear
Ejecutar migraciones desde cero
sh
Copy code
php artisan migrate:fresh --seed
Compilar Tailwind CSS en producción
sh
Copy code
npm run build
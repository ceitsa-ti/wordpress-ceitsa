# CEITSA Theme

Tema WordPress moderno basado en [TailPress](https://tailpress.io/) y [TailwindCSS](https://tailwindcss.com/), desarrollado para CEITSA con soporte completo para bloques, compatibilidad FSE (Full Site Editing), y automatizaciones preparadas para flujos de desarrollo profesional.

---

## 🚀 Instalación

```bash
# Clona el repositorio en la carpeta de temas
cd wp-content/themes/
git clone git@github.com:ceitsa-ti/wordpress-ceitsa.git ceitsa-theme
cd ceitsa-theme

# Instala dependencias
npm install

# Compila TailwindCSS
npm run build
```

> Asegúrate de tener Node.js ≥16 y npm ≥8

---

## 📂 Estructura del tema

```
ceitsa-theme/
├── assets/              # Archivos estáticos (CSS, JS, imágenes)
├── src/
│   └── css/             # Fuentes de estilos (Tailwind)
├── block-patterns/      # Patrones reutilizables
├── templates/           # Plantillas completas en PHP/HTML
├── template-parts/      # Secciones parciales (header, footer)
├── scripts/             # Utilidades y tareas
├── functions.php        # Registro de bloques, estilos, patrones
├── theme.json           # Configuración global (paleta, tipografías)
├── tailwind.config.js   # Configuración de Tailwind
├── postcss.config.js    # Configuración de PostCSS
└── style.css            # Encabezado para WP + build info
```

---

## 🧪 Scripts disponibles

```bash
npm run build    # Compila main.css con Tailwind
npm run dev      # Compilación en modo watch
```

---

## 🛠️ Características

- ✅ TailwindCSS 3
- ✅ Compilación con PostCSS
- ✅ `theme.json` activo
- ✅ Plantillas FSE (`index.html`, `header.html`, `footer.html`)
- ✅ Paleta de colores y tipografías definidas
- ✅ Soporte para Gutenberg blocks
- ✅ Listo para GitHub Actions

---

## 🧑‍💻 Contribución

```bash
# Crea una rama para tu feature o fix
 git checkout -b feature/nueva-seccion

# Haz commit con mensaje claro
 git commit -m "Agrega sección de testimonios en footer"

# Haz push y abre un Pull Request
 git push origin feature/nueva-seccion
```

---

## 📄 Licencia

GPL-2.0-or-later. Consulta `LICENSE` para más detalles.

---

Desarrollado con ❤️ por CEITSA.

# Agencia Custom Theme

Este es un tema de WordPress creado desde cero para una agencia/portafolio profesional.

## Requisitos
* WordPress 6.0+
* Plugin **Advanced Custom Fields (ACF)**

## Configuración de ACF
Para que el portafolio funcione, crea un grupo de campos llamado "Información del Proyecto" con los siguientes campos:
1. `url_del_proyecto` (Tipo: URL)
2. `tecnologias` (Tipo: Texto)

Asignar este grupo al Custom Post Type: **Proyecto**.

## Estructura de archivos
* `front-page.php`: Página de inicio con WP_Query.
* `single-proyecto.php`: Plantilla detallada para cada trabajo.
* `template-parts/`: Componentes reutilizables de la interfaz.
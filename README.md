![Logo cView](/assets/img/logo.png)


# cView Framework

Welcome to cView, the micro-framework designed for crafting static sites and landing pages with ease. Optimized for projects that require a few pages and manageable content through a GraphQL-based Headless CMS, cView aims to simplify your web development process.

## Features

- **Simple and Streamlined**: Built to be straightforward and easy to pick up, enabling rapid development without a steep learning curve.
- **Perfect for Static Sites**: Ideal for creating static websites and landing pages efficiently.
- **Seamless CMS Integration**: Manage your content effortlessly with Headless CMS based on GraphQL for a smooth workflow and dynamic user experience.

## Getting Started

To get started with cView, follow these steps:

1. **Clone the repository**:

   ```bash
   git clone https://github.com/fellarrusto/cView
   ```

2. **Navigate to the project directory**:

   ```bash
   cd cView
   ```
## Project Structure

- `core/`: Core functionalities of the framework.
- `src/components/`: Reusable components.
- `src/datalinks/`: Reusable components.
- `views/`: Pages.
- `assets/`: Static files like stylesheets, JavaScript, and images.

## Basic Components Overview

In cView framework, the structure of a project is built around a few key types of components, each serving a specific purpose in the development of a web application. Here's a brief overview:

### Pages
Pages are essentially HTML pages that serve as the foundation of the site. They act as the entry points for different sections of your web application, rendering the content and structure defined within them.

### Components
Components are parts of the site that are data-driven. They retrieve data from GraphQL APIs and render the component based on this data. Components are reusable and can be used across different pages to maintain a consistent look and feel while displaying dynamic content.

### Static Components
Static Components are similar to regular components but do not depend on data obtained from APIs. They are used for parts of the site that remain constant, such as headers, footers, or navigation bars. Static components help in maintaining consistency across the site without the need for dynamic data fetching.

### Datalinks
Datalinks are objects that allow fetching data from APIs without rendering any visual component. They are used within pages for fetching generic data that can be passed to components for rendering. Datalinks separate the data fetching logic from the visual presentation, making the components more modular and reusable.


## Creating a New Page

   ```bash
   python create.py page PageName
   ```

## Adding a new component

   ```bash
   python create.py component ComponentName
   ```

## Adding a new static component

   ```bash
   python create.py staticcomponent StaticComponentName
   ```

# Adding a new datalink

   ```bash
   python create.py datalink DatalinkName
   ```

## Contributing

We welcome contributions! Please feel free to fork the repository, make your changes, and submit a pull request.

## License

cView is open-sourced software licensed under the [MIT license](LICENSE).
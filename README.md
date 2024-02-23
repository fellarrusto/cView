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
5. **Configure your environment** by updating the `.env` file with your specific settings, such as your Headless CMS API keys and endpoints.

6. **Start your development server**:

   ```bash
   php -S localhost:8000
   ```

   Navigate to `http://localhost:8000` in your web browser to see the project live.

## Project Structure

- `core/`: Core functionalities of the framework.
- `src/components/`: Reusable components.
- `views/`: Templates and pages.
- `assets/`: Static files like stylesheets, JavaScript, and images.

## Creating a New Page

To create a new page:

1. Add a new PHP file in the `views/` directory.
2. Register your new page in the `$allowedPages` array within `index.php`.

## Contributing

We welcome contributions! Please feel free to fork the repository, make your changes, and submit a pull request.

## License

cView is open-sourced software licensed under the [MIT license](LICENSE).
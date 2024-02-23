import os
import sys

def create_component(class_name):
    template_path = "core/TemplateComponent.php"
    content = replace_placeholder(template_path, "PlaceholderClassName", class_name)
    write_file("src/components", f"{class_name}.php", content)

def create_static_component(class_name):
    template_path = "core/TemplateStaticComponent.php"
    content = replace_placeholder(template_path, "PlaceholderClassName", class_name)
    write_file("src/components", f"{class_name}.php", content)

def create_datalink(class_name):
    template_path = "core/TemplateDatalink.php"
    content = replace_placeholder(template_path, "PlaceholderClassName", class_name)
    write_file("src/datalinks", f"{class_name}.php", content)

def replace_placeholder(template_path, placeholder, value):
    with open(template_path, 'r') as file:
        content = file.read()
    return content.replace(placeholder, value)

def write_file(directory, filename, content):
    os.makedirs(directory, exist_ok=True)
    path = os.path.join(directory, filename)
    with open(path, 'w') as file:
        file.write(content)
    print(f"{filename} has been created successfully in {directory}")

def create_page(page_name):
    # Copia il template della pagina
    template_path = "core/TemplatePage.php"
    content = replace_placeholder(template_path, "PlaceholderTitle", page_name)
    write_file("views", f"{page_name}.php", content)
    
    # Aggiungi il path della nuova pagina al file index.php per il routing
    add_page_to_router(page_name)

def add_page_to_router(page_name):
    index_path = "index.php"
    
    with open(index_path, 'r') as file:
        content = file.read()

    # Trova la posizione per inserire la nuova route mantenendo la chiusura dell'array
    insertion_point = content.rfind("];")
    new_route = f"    '/{page_name}' => 'views/{page_name}.php',\n"
    updated_content = content[:insertion_point] + new_route + content[insertion_point:]
    
    with open(index_path, 'w') as file:
        file.write(updated_content)

    print(f"Route for {page_name} added to index.php")

# Modifica la funzione main per gestire il nuovo comando 'page'
def main():
    if len(sys.argv) != 3:
        print("Usage: python create.py <component|staticcomponent|datalink|page> <ClassName/PageName>")
        sys.exit(1)
    
    class_type = sys.argv[1].lower()
    class_name = sys.argv[2]

    if class_type == "component":
        create_component(class_name)
    elif class_type == "staticcomponent":
        create_static_component(class_name)
    elif class_type == "datalink":
        create_datalink(class_name)
    elif class_type == "page":
        create_page(class_name)
    else:
        print("Invalid type. Please choose 'component', 'staticcomponent', 'datalink', or 'page'.")
        sys.exit(1)

if __name__ == "__main__":
    main()
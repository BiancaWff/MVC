import os
import re

base_dir = '/home/bianca/Documents/DevWebIII/MVC'
with open(os.path.join(base_dir, 'codigo_base.php'), 'r', encoding='utf-8') as f:
    html = f.read()

dirs = [
    'app/Views/layouts',
    'app/Views/home',
    'app/Views/vagas',
    'app/Views/empresas',
    'app/Views/sobre',
    'app/Views/contato'
]

for d in dirs:
    os.makedirs(os.path.join(base_dir, d), exist_ok=True)

# 1. Extrair Header
# Captura de <!DOCTYPE html> at&eacute; antes de <main>
header_match = re.search(r'(<!DOCTYPE html>.*?)<main id="main-content">', html, re.DOTALL)
if header_match:
    header = header_match.group(1) + '<main id="main-content">'
    
    # Remove as tags de style embutidas
    header = re.sub(r'<style>.*?</style>', '', header, flags=re.DOTALL)
    
    # Adiciona o link do css extra&iacute;do antes do </head>
    header = header.replace('</head>', '  <link rel="stylesheet" href="/assets/css/style.css">\n</head>')
    
    # Converter bot&otilde;es de navega&ccedil;&atilde;o JS em links (<a>)
    # <button class="nav-link active" data-nav="home" onclick="navigate('home')">Início</button> -> <a href="/home" class="nav-link">Início</a>
    header = re.sub(r'<button class="nav-link([^"]*)"[^>]*onclick="navigate\(\'([^\']+)\'\)[^>]*>(.*?)</button>', r'<a href="/\2" class="nav-link\1">\3</a>', header)
    
    # Atualizar outros botoes que usam onclick navigate para href ou window.location
    header = re.sub(r'onclick="navigate\(\'([^\']+)\'\);?toggleMobileNav\(\)"', r'onclick="window.location.href=\'/\1\'"', header)
    header = re.sub(r'onclick="navigate\(\'([^\']+)\'\)"', r'onclick="window.location.href=\'/\1\'"', header)
    
    with open(os.path.join(base_dir, 'app/Views/layouts/header.php'), 'w', encoding='utf-8') as f:
        f.write(header)

# 2. Extrair Pages
pages = ['home', 'vagas', 'empresas', 'sobre', 'contato']
for page in pages:
    # A regex procura a div da pagina espec&iacute;fica
    # (?s) &eacute; equivalente a re.DOTALL, pega tudo at&eacute; a pr&oacute;xima page ou at&eacute; o fim da div do page-container
    regex = fr'(<div class="page[^"]*" id="page-{page}">.*?)(?:<div class="page|</main>)'
    page_match = re.search(regex, html, re.DOTALL)
    
    if page_match:
        content = page_match.group(1).strip()
        
        # O content &eacute; colocado entre as tags do layout
        full_content = f"<?php require_once __DIR__ . '/../layouts/header.php'; ?>\n\n{content}\n\n<?php require_once __DIR__ . '/../layouts/footer.php'; ?>"
        
        # Atualiza os botoes no meio da p&aacute;gina que usam onclick="navigate(...)"
        full_content = re.sub(r'onclick="navigate\(\'([^\']+)\'\)"', r'onclick="window.location.href=\'/\1\'"', full_content)
        
        with open(os.path.join(base_dir, f'app/Views/{page}/index.php'), 'w', encoding='utf-8') as f:
            f.write(full_content)

# 3. Extrair Footer
# Captura do fechamento de main at&eacute; o final do documento
footer_match = re.search(r'(</main>.*)', html, re.DOTALL)
if footer_match:
    footer = footer_match.group(1)
    
    # Remove scripts embutidos
    footer = re.sub(r'<script>.*?</script>', '', footer, flags=re.DOTALL)
    
    # Adiciona a importa&ccedil;&atilde;o do JS extra&iacute;do antes do fechamento do body
    footer = footer.replace('</body>', '  <script src="/assets/js/script.js"></script>\n</body>')
    
    with open(os.path.join(base_dir, 'app/Views/layouts/footer.php'), 'w', encoding='utf-8') as f:
        f.write(footer)

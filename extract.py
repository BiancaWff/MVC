import re
import os

with open('/home/bianca/Documents/DevWebIII/MVC/codigo_base.php', 'r', encoding='utf-8') as f:
    content = f.read()

os.makedirs('/home/bianca/Documents/DevWebIII/MVC/public/assets/css', exist_ok=True)
os.makedirs('/home/bianca/Documents/DevWebIII/MVC/public/assets/js', exist_ok=True)

# Extrair CSS
css_match = re.search(r'<style>(.*?)</style>', content, re.DOTALL)
if css_match:
    with open('/home/bianca/Documents/DevWebIII/MVC/public/assets/css/style.css', 'w', encoding='utf-8') as f:
        f.write(css_match.group(1).strip())

# Extrair JS
js_matches = re.findall(r'<script>(.*?)</script>', content, re.DOTALL)
if js_matches:
    with open('/home/bianca/Documents/DevWebIII/MVC/public/assets/js/script.js', 'w', encoding='utf-8') as f:
        for js in js_matches:
            f.write(js.strip() + '\n\n')

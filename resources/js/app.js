import './bootstrap';
<script>
    document.getElementById('toggleTheme').addEventListener('click', function() {
        document.body.classList.toggle('night-mode');
        document.querySelector('.navbar').classList.toggle('night-mode');
        document.querySelector('.footer').classList.toggle('night-mode');
        document.querySelectorAll('.feature-box').forEach(el => el.classList.toggle('night-mode'));
        document.querySelectorAll('.cardMonument').forEach(el => el.classList.toggle('night-mode'));
        document.querySelectorAll('.cardMonument-text').forEach(el => el.classList.toggle('night-mode'));
        document.querySelectorAll('.btn-primary').forEach(el => el.classList.toggle('night-mode'));
        document.querySelectorAll('.nav-link').forEach(el => el.classList.toggle('night-mode'));
        document.querySelectorAll('.bg-light').forEach(el => el.classList.toggle('night-mode'));
    });

    const translations = {
        en: {
            'Bienvenido a Explora Macael': 'Welcome to Explore Macael',
            'Descubre la belleza de Macael y sus alrededores.': 'Discover the beauty of Macael and its surroundings.',
            'Contacto': 'Contact',
            'Dirección: Calle García Lorca, 50, 04867 Macael, Almería': 'Address: Calle García Lorca, 50, 04867 Macael, Almería',
            'Email:': 'Email:',
            'Teléfono:': 'Phone:',
            'Horario': 'Schedule',
            'Abierto de Martes a Domingo. Incluido festivos': 'Open from Tuesday to Sunday. Including holidays',
            '(Domingo y Lunes por la tarde cerrado.)': '(Sunday and Monday afternoon closed.)',
            'Mayo – Octubre: 10:00 a 14:00 y de 18:00 a 20:00.': 'May – October: 10:00 to 14:00 and 18:00 to 20:00.',
            'Noviembre – Abril: 10:00 a 14:00 y de 17:00 a 19:00.': 'November – April: 10:00 to 14:00 and 17:00 to 19:00.',
            'Enlaces Rápidos': 'Quick Links',
            'Inicio': 'Home',
            'Descubre Macael': 'Discover Macael',
            'Qué Ver': 'What to See',
            'Qué Hacer': 'What to Do',
            'Organiza tu Viaje': 'Plan Your Trip',
            'Síguenos': 'Follow Us',
            '&copy; 2024 Explora Macael - Todos los derechos reservados': '&copy; 2024 Explore Macael - All rights reserved'
        },
        es: {
            'Welcome to Explore Macael': 'Bienvenido a Explora Macael',
            'Discover the beauty of Macael and its surroundings.': 'Descubre la belleza de Macael y sus alrededores.',
            'Contact': 'Contacto',
            'Address: Calle García Lorca, 50, 04867 Macael, Almería': 'Dirección: Calle García Lorca, 50, 04867 Macael, Almería',
            'Email:': 'Email:',
            'Phone:': 'Teléfono:',
            'Schedule': 'Horario',
            'Open from Tuesday to Sunday. Including holidays': 'Abierto de Martes a Domingo. Incluido festivos',
            '(Sunday and Monday afternoon closed.)': '(Domingo y Lunes por la tarde cerrado.)',
            'May – October: 10:00 to 14:00 and 18:00 to 20:00.': 'Mayo – Octubre: 10:00 a 14:00 y de 18:00 a 20:00.',
            'November – April: 10:00 to 14:00 and 17:00 to 19:00.': 'Noviembre – Abril: 10:00 a 14:00 y de 17:00 a 19:00.',
            'Quick Links': 'Enlaces Rápidos',
            'Home':
        }
    }
    </script>
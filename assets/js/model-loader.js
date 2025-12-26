(async function () {
    const model = '<?=$modelo?>'; // depois você pega da URL
    const segment = '<?=$segmento?>'; // depois você pega da URL
    const response = await fetch(`assets/modelos/${model}/${segment}.json`);
    const data = await response.json();

    // SEO
    document.title = data.seo.title;
    document.querySelector('meta[name="description"]').content = data.seo.description;
    document.querySelector('meta[name="keywords"]').content = data.seo.keywords;

    // Theme
    document.getElementById('colors').href = `css/colors/${data.theme.color_scheme}`;

    // Brand
    document.querySelectorAll('[data-logo-dark]').forEach(el => el.src = data.brand.logo_dark);
    document.querySelectorAll('[data-logo-light]').forEach(el => el.src = data.brand.logo_light);

    // Generic binder
    document.querySelectorAll('[data-bind]').forEach(el => {
        const path = el.dataset.bind.split('.');
        let value = data;
        path.forEach(p => value = value[p]);
        el.innerHTML = value;
    });

    // Hero image
    document.getElementById('hero-image')
        .style.backgroundImage = `url(${data.hero.image})`;

})();

<?php get_header(); ?>

<style>
    .professional-hero {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 80px 0;
        text-align: center;
        margin-bottom: 50px;
    }

    .professional-hero h1 {
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .professional-hero p {
        font-size: 1.3rem;
        opacity: 0.95;
    }

    .search-section {
        background-color: #f8f9fa;
        padding: 40px 0;
        margin-bottom: 50px;
    }

    .search-section form {
        display: flex;
        gap: 10px;
        max-width: 500px;
        margin: 0 auto;
    }

    .search-section input {
        flex: 1;
        padding: 12px 20px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 1rem;
    }

    .search-section button {
        padding: 12px 30px;
        background-color: #667eea;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 1rem;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .search-section button:hover {
        background-color: #764ba2;
    }

    .gallery-section {
        margin-bottom: 50px;
    }

    .gallery-section h2 {
        font-size: 2.5rem;
        margin-bottom: 40px;
        color: #333;
        text-align: center;
    }

    .gallery-item {
        position: relative;
        overflow: hidden;
        border-radius: 8px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 300px;
    }

    .gallery-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
    }

    .gallery-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .gallery-item-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
        color: white;
        padding: 30px 20px 20px;
        transform: translateY(100%);
        transition: transform 0.3s ease;
    }

    .gallery-item:hover .gallery-item-overlay {
        transform: translateY(0);
    }

    .content-section {
        background-color: #fff;
        padding: 50px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        margin-bottom: 50px;
    }

    .content-section h2 {
        font-size: 2rem;
        color: #333;
        margin-bottom: 20px;
    }

    .content-section p {
        font-size: 1rem;
        line-height: 1.8;
        color: #555;
    }

    .stats-section {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 60px 0;
        margin-bottom: 50px;
    }

    .stat-item {
        text-align: center;
        padding: 30px;
    }

    .stat-number {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .stat-label {
        font-size: 1rem;
        opacity: 0.95;
    }
</style>

<!-- Hero Section -->
<div class="professional-hero">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <p>Welcome to our professional showcase</p>
    </div>
</div>

<!-- Search Section -->
<div class="search-section">
    <div class="container">
        <h3 style="text-align: center; margin-bottom: 30px; color: #333;">Find What You're Looking For</h3>
        <?php get_search_form(); ?>
    </div>
</div>

<!-- Gallery Section -->
<div class="container gallery-section">
    <h2>Our Featured Gallery</h2>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="gallery-item">
                <img src="https://via.placeholder.com/400x300?text=Gallery+1" alt="Gallery Item 1">
                <div class="gallery-item-overlay">
                    <h4 style="margin: 0;">Professional Design</h4>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="gallery-item">
                <img src="https://via.placeholder.com/400x300?text=Gallery+2" alt="Gallery Item 2">
                <div class="gallery-item-overlay">
                    <h4 style="margin: 0;">Modern Solutions</h4>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="gallery-item">
                <img src="https://via.placeholder.com/400x300?text=Gallery+3" alt="Gallery Item 3">
                <div class="gallery-item-overlay">
                    <h4 style="margin: 0;">Quality Services</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Content Section -->
<div class="container">
    <div class="content-section">
        <h2>About This Page</h2>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>
</div>

<!-- Stats Section -->
<div class="stats-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3 stat-item">
                <div class="stat-number">500+</div>
                <div class="stat-label">Happy Clients</div>
            </div>
            <div class="col-md-3 stat-item">
                <div class="stat-number">1000+</div>
                <div class="stat-label">Projects Completed</div>
            </div>
            <div class="col-md-3 stat-item">
                <div class="stat-number">50+</div>
                <div class="stat-label">Team Members</div>
            </div>
            <div class="col-md-3 stat-item">
                <div class="stat-number">10+</div>
                <div class="stat-label">Years Experience</div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
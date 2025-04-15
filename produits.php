<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AviGest - Gestion des Produits</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="produits.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="produits.js"></script>
</head>
<body>
   <?php require_once(__DIR__ . '/hearder.php'); ?>

   <!-- Main Content with Sidebar Layout -->
   <div class="layout">
       <?php require_once(__DIR__ . '/menu.php'); ?>
        <!-- Main Content -->
        <main class="content">
            <div class="page-header">
                <h1>Gestion des Produits</h1>
                <button class="btn btn-primary" id="add-product-btn">
                    <i class="fas fa-plus"></i> Ajouter un produit
                </button>
            </div>
            
            <!-- Search & Filter -->
            <div class="search-container">
                <input type="text" class="search-input" placeholder="Rechercher un produit...">
                <button class="search-btn">
                    <i class="fas fa-search"></i>
                </button>
            </div>
            
            <!-- Tabs -->
            <div class="tabs">
                <div class="tab active">Tous les produits</div>
                <div class="tab">Volailles</div>
                <div class="tab">Provendes</div>
                <div class="tab">Médicaments</div>
                <div class="tab">Accessoires</div>
            </div>
            
            <!-- Product Grid View -->
            <div class="product-grid">
                <!-- Product 1 -->
                <div class="product-card">
                    <div class="product-image">
                        <i class="fas fa-drumstick-bite"></i>
                    </div>
                    <div class="product-details">
                        <h3 class="product-title">Poulets de chair</h3>
                        <div class="product-meta">
                            <span>Volaille</span>
                            <span>Unité</span>
                        </div>
                        <div class="product-price">3,750 FCFA / unité</div>
                        <div class="product-stock">
                            <div class="stock-bar">
                                <div class="stock-level low" style="width: 10%;"></div>
                            </div>
                            <span class="text-danger">10 en stock</span>
                        </div>
                        <div class="product-actions">
                            <button class="btn btn-sm btn-info">
                                <i class="fas fa-eye"></i> Détails
                            </button>
                            <button class="btn btn-sm btn-warning">
                                <i class="fas fa-edit"></i> Modifier
                            </button>
                            <button class="btn btn-sm btn-danger">
                                <i class="fas fa-trash"></i> Supprimer
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Product 2 -->
                <div class="product-card">
                    <div class="product-image">
                        <i class="fas fa-kiwi-bird"></i>
                    </div>
                    <div class="product-details">
                        <h3 class="product-title">Poussins</h3>
                        <div class="product-meta">
                            <span>Volaille</span>
                            <span>Unité</span>
                        </div>
                        <div class="product-price">1,500 FCFA / unité</div>
                        <div class="product-stock">
                            <div class="stock-bar">
                                <div class="stock-level" style="width: 75%;"></div>
                            </div>
                            <span class="text-success">150 en stock</span>
                        </div>
                        <div class="product-actions">
                            <button class="btn btn-sm btn-info">
                                <i class="fas fa-eye"></i> Détails
                            </button>
                            <button class="btn btn-sm btn-warning">
                                <i class="fas fa-edit"></i> Modifier
                            </button>
                            <button class="btn btn-sm btn-danger">
                                <i class="fas fa-trash"></i> Supprimer
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Product 3 -->
                <div class="product-card">
                    <div class="product-image">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <div class="product-details">
                        <h3 class="product-title">Provende démarrage</h3>
                        <div class="product-meta">
                            <span>Aliment</span>
                            <span>Sac (25kg)</span>
                        </div>
                        <div class="product-price">15,000 FCFA / sac</div>
                        <div class="product-stock">
                            <div class="stock-bar">
                                <div class="stock-level" style="width: 65%;"></div>
                            </div>
                            <span class="text-success">25 en stock</span>
                        </div>
                        <div class="product-actions">
                            <button class="btn btn-sm btn-info">
                                <i class="fas fa-eye"></i> Détails
                            </button>
                            <button class="btn btn-sm btn-warning">
                                <i class="fas fa-edit"></i> Modifier
                            </button>
                            <button class="btn btn-sm btn-danger">
                                <i class="fas fa-trash"></i> Supprimer
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Product 4 -->
                <div class="product-card">
                    <div class="product-image">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <div class="product-details">
                        <h3 class="product-title">Provende croissance</h3>
                        <div class="product-meta">
                            <span>Aliment</span>
                            <span>Sac (25kg)</span>
                        </div>
                        <div class="product-price">14,500 FCFA / sac</div>
                        <div class="product-stock">
                            <div class="stock-bar">
                                <div class="stock-level medium" style="width: 40%;"></div>
                            </div>
                            <span class="text-warning">15 en stock</span>
                        </div>
                        <div class="product-actions">
                            <button class="btn btn-sm btn-info">
                                <i class="fas fa-eye"></i> Détails
                            </button>
                            <button class="btn btn-sm btn-warning">
                                <i class="fas fa-edit"></i> Modifier
                            </button>
                            <button class="btn btn-sm btn-danger">
                                <i class="fas fa-trash"></i> Supprimer
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Product 5 -->
                <div class="product-card">
                    <div class="product-image">
                        <i class="fas fa-pills"></i>
                    </div>
                    <div class="product-details">
                        <h3 class="product-title">Antibiotique volaille</h3>
                        <div class="product-meta">
                            <span>Médicament</span>
                            <span>Flacon</span>
                        </div>
                        <div class="product-price">5,000 FCFA / flacon</div>
                        <div class="product-stock">
                            <div class="stock-bar">
                                <div class="stock-level" style="width: 80%;"></div>
                            </div>
                            <span class="text-success">32 en stock</span>
                        </div>
                        <div class="product-actions">
                            <button class="btn btn-sm btn-info">
                                <i class="fas fa-eye"></i> Détails
                            </button>
                            <button class="btn btn-sm btn-warning">
                                <i class="fas fa-edit"></i> Modifier
                            </button>
                            <button class="btn btn-sm btn-danger">
                                <i class="fas fa-trash"></i> Supprimer
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Product 6 -->
                <div class="product-card">
                    <div class="product-image">
                        <i class="fas fa-water"></i>
                    </div>
                    <div class="product-details">
                        <h3 class="product-title">Abreuvoir</h3>
                        <div class="product-meta">
                            <span>Accessoire</span>
                            <span>Unité</span>
                        </div>
                        <div class="product-price">3,000 FCFA / unité</div>
                        <div class="product-stock">
                            <div class="stock-bar">
                                <div class="stock-level" style="width: 60%;"></div>
                            </div>
                            <span class="text-success">24 en stock</span>
                        </div>
                        <div class="product-actions">
                            <button class="btn btn-sm btn-info">
                                <i class="fas fa-eye"></i> Détails
                            </button>
                            <button class="btn btn-sm btn-warning">
                                <i class="fas fa-edit"></i> Modifier
                            </button>
                            <button class="btn btn-sm btn-danger">
                                <i class="fas fa-trash"></i> Supprimer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Pagination -->
            <div class="text-center">
                <ul class="pagination">
                    <li><a href="#"><i class="fas fa-chev
                    ron-left"></i></a></li>
                    <li><a href="#" class="active">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i></a></li>
                </ul>
            </div>
        </main>
    </div>

    <!-- Footer -->
   <?php require_once(__DIR__ . '/footer.php'); ?>
</body>
</html>
  
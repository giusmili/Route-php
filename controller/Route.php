<?php


class Routes
{
    # Définir les routes autorisées comme une constante
    private const ALLOWED_ROUTES = ['home', 'about', 'contact'];

    /**
     * Méthode principale pour gérer les routes
     * @return string La page à afficher
     */
    public static function getRoute(): string
    {
       # Récupérer la page demandée ou 'home' par défaut
        $page = $_GET['page'] ?? 'home';

        # Vérifier si la page est autorisée, sinon rediriger vers 'home'
        if (!self::isRouteAllowed($page)) {
            $page = 'home';
        }

        # Vérifier si le fichier correspondant existe
        if (!self::doesPageExist($page)) {
            die("Erreur : La page demandée n'existe pas.");
        }

        return $page;
    }

    /**
     * Vérifie si une route est autorisée
     * @param string $route La route à vérifier
     * @return bool True si la route est autorisée, sinon False
     */
    private static function isRouteAllowed(string $route): bool
    {
        return in_array($route, self::ALLOWED_ROUTES);
    }

    /**
     * Vérifie si le fichier de la page existe
     * @param string $page Le nom de la page
     * @return bool True si le fichier existe, sinon False
     */
    private static function doesPageExist(string $page): bool
    {
        $pagePath = "./pages/$page.php";
        return file_exists($pagePath);
    }
}
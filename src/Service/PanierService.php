<?php
namespace App\Service;

use App\Entity\Commande;
use App\Entity\Plat;
use App\Entity\User;
use App\Repository\PlatRepository;
use phpDocumentor\Reflection\Types\Void_;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RequestStack;

class PanierService
{
    private $requestStack;
    private $platRepository;
    public function __construct(RequestStack $requestStack, PlatRepository $platRepository)
    {
        $this->requestStack=$requestStack;
        $this->platRepository=$platRepository;
    }

    public function ShowPanier(): array
    {
        $session = $this->requestStack->getsession();
        return $session->get('panier', []);
    }

    public function ShowDataPanier(): array
    {
        $panier = $this->ShowPanier();
        $dataPanier = [];
        foreach ($panier as $id => $quantite) {
            $plat = $this->platRepository->find($id);
        $dataPanier[] = [
            "plat" => $plat ,
            "quantite" => $quantite
        ];
    }
    return $dataPanier;

    }

    public function getTotal(): int
    {
        $panier = $this->ShowPanier();
        $total = 0;
        foreach($panier as $id => $quantite){
            $plat = $this->platRepository->find($id);
            $total += $plat->getPrix() * $quantite;
        }
        return $total;
    }

    public function AddPlat(Plat $plat): void
    {
        $session = $this->requestStack->getSession();
        $panier = $session->get('panier', []);
        $id = $plat->getId();

        if(!empty($panier[$id])){
            $panier[$id]++;
        } else {
            $panier[$id] = 1;
        }

        $session->set('panier', $panier);
    }

    public function RemoveQuantity(Plat $plat): void
    {
        $session = $this->requestStack->getSession();
        $panier = $session->get('panier', []);
        $id = $plat->getId();
        if(!empty($panier[$id])){
            if($panier[$id] > 1){
                $panier[$id]--;
            } else {
                unset($panier[$id]);
            }
        }
        $session->set('panier', $panier);
    }

    public function DeletePlat(Plat $plat): void 
    {
        $session = $this->requestStack->getSession();
        $panier = $session->get('panier', []);
        $id = $plat->getId();
        if (!empty($panier[$id])){
            unset($panier[$id]);
        }
        $session->set('panier', $panier);
    }
    public function DeleteAllPlat(): void
    {
        $session = $this->requestStack->getSession();
        $session->set('panier', []);
    }
}
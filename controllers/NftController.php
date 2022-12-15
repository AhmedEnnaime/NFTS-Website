<?php
session_start();
require_once "../models/Nft.php";

class NftController
{

    public function getAllNfts()
    {
        $nfts = Nft::getAll();
        return $nfts;
    }

    public function getOneNft()
    {
        if (isset($_POST['id'])) {
            $data = array(
                'id' => $_POST['id']
            );
            $nft = Nft::getNft($data);
            return $nft;
        }
    }

    public function addNft()
    {
        if (isset($_POST['add'])) {
            $data = array(
                'name' => $_POST['name'],
                'collection_id' => $_POST['collection_id'],
                'description' => $_POST['description'],
                'img' => $_FILES['img']['name'],
                'price' => $_POST['price'],
                'user_id' => $_SESSION['id'],
            );
            $result = Nft::add($data);
            if ($result == 'ok') {
                header('Location: ../views/nfts.php');
            } else {
                echo $result;
            }
        }
    }

    public function updateNft()
    {
        if (isset($_POST['update'])) {
            $data = array(
                'id' => $_POST['id'],
                'name' => $_POST['name'],
                'collection_id' => $_POST['collection_id'],
                'description' => $_POST['description'],
                'img' => $_FILES['img']['name'],
                'price' => $_POST['price'],
            );
            $result = Nft::update($data);
            if ($result == 'ok') {
                header('Location: ../views/nfts.php');
            } else {
                echo $result;
            }
        }
    }

    public function deleteNft()
    {
        if (isset($_POST['id'])) {
            $data['id'] = $_POST['id'];
            $result = Nft::delete($data);
            if ($result == 'ok') {
                header('Location: ../views/nfts.php');
            } else {
                echo $result;
            }
        }
    }

    public function getNfts()
    {
        if (isset($_POST['id'])) {
            $data['collection_id'] = $_POST['id'];
            $result = Nft::getSpecialNfts($data);
            return $result;
        }
    }

    public function getMostExpensive()
    {
        $expensive = Nft::getExpensive();
        return $expensive;
    }

    public function getMostCheapest()
    {
        $cheap = Nft::getCheap();
        return $cheap;
    }

    public function getCountNft()
    {
        $nftCount = Nft::getNftNum();
        return $nftCount;
    }

    public function ascSort()
    {
        $ascSort = Nft::ascendingSort();
        return $ascSort;
    }

    public function descSort()
    {
        $descSort = Nft::descendingSort();
        return $descSort;
    }

    public function latestSort()
    {
        $latestSort = Nft::latestListed();
        return $latestSort;
    }

    public function findNfts()
    {
        if (isset($_POST['search'])) {
            $data = array('search' => $_POST['search']);
        }
        $nfts = Nft::searchNft($data);
        return $nfts;
    }
}

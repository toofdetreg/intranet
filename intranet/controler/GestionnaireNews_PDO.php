<?php
class GestionnaireNews_PDO extends GestionnaireNews
{
	/**
	 * Attribut contenant l'instance représentant la BDD.
	 * @type PDO
	 */
	protected $db;

	/**
	 * Constructeur étant chargé d'enregistrer l'instance de PDO dans l'attribut $db.
	 * @param $db PDO Le DAO
	 * @return void
	 */
	public function __construct(PDO $db)
	{
		$this->db = $db;
	}

	/**
	 * @see NewsManager::add()
	 */
	protected function ajouter(News $news)
	{
		$requete = $this->db->prepare('INSERT INTO news SET aufdsdsteur = :auteur, titre = :titre, contenu = :contenu, dateAjout = NOW(), dateModif = NOW(), image=:image');

		$requete->bindValue(':titre', $news->titre());
		$requete->bindValue(':auteur', $news->auteur());
		$requete->bindValue(':contenu', $news->contenu());
		$requete->bindValue(':image', $news->image());

		$requete->execute();
	}

	/**
	 * @see NewsManager::count()
	 */
	public function compter()
	{
		return $this->db->query('SELECT COUNT(*) FROM news')->fetchColumn();
	}

	/**
	 * @see NewsManager::delete()
	 */
	public function supprimer($id)
	{
		$this->db->exec('DELETE FROM news WHERE id = '.(int) $id);
	}

	/**
	 * @see NewsManager::getList()
	 */
	public function getList($debut = -1, $limite = -1)
	{
		$sql = 'SELECT id, auteur, titre, contenu, DATE_FORMAT (dateAjout, \'le %d/%m/%Y à %Hh%i\') AS dateAjout, DATE_FORMAT (dateModif, \'le %d/%m/%Y à %Hh%i\') AS dateModif, image FROM news ORDER BY id DESC';

		// On vérifie l'intégrité des paramètres fournis.
		if ($debut != -1 || $limite != -1)
		{
			$sql .= ' LIMIT '.(int) $limite.' OFFSET '.(int) $debut;
		}

		$requete = $this->db->query($sql);
		$requete->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'News');

		$listeNews = $requete->fetchAll();

		$requete->closeCursor();

		return $listeNews;
	}

	/**
	 * @see NewsManager::getUnique()
	 */
	public function getId($id)
	{
		$requete = $this->db->prepare('SELECT id, auteur, titre, contenu, DATE_FORMAT (dateAjout, \'le %d/%m/%Y à %Hh%i\') AS dateAjout, DATE_FORMAT (dateModif, \'le %d/%m/%Y à %Hh%i\') AS dateModif, image FROM news WHERE id = :id');
		$requete->bindValue(':id', (int) $id, PDO::PARAM_INT);
		$requete->execute();

		$requete->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'News');

		return $requete->fetch();
	}

	/**
	 * @see NewsManager::update()
	 */
	protected function update(News $news)
	{
		$requete = $this->db->prepare('UPDATE news SET auteur = :auteur, titre = :titre, contenu = :contenu, dateModif = NOW(), image=:image WHERE id = :id');

		$requete->bindValue(':titre', $news->titre());
		$requete->bindValue(':auteur', $news->auteur());
		$requete->bindValue(':contenu', $news->contenu());
		$requete->bindValue(':image', $news->image());
		$requete->bindValue(':id', $news->id(), PDO::PARAM_INT);

		$requete->execute();
	}
}
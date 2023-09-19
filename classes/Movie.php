class Movie {
  public &titolo;
  public &genere;
  public &description;

  function __construct($_titolo, $_genere, $_description) {
    $this->titolo = $_titolo;
    $this->genere = $_genere;
    $this->descrizione = $_descrizione;
  }

  public function concatenate() {
    return 'Titolo:' $this->titolo . '. Genere:' . $this->genere . '. Descrizione' . $this->descrizione;
  }
}
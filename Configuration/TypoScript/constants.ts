
plugin.tx_vendorinventoryadvanced_vendorinventoryfe {
  view {
    # cat=plugin.tx_vendorinventoryadvanced_vendorinventoryfe/file; type=string; label=Path to template root (FE)
    templateRootPath = EXT:vendorinventoryadvanced/Resources/Private/Templates/
    # cat=plugin.tx_vendorinventoryadvanced_vendorinventoryfe/file; type=string; label=Path to template partials (FE)
    partialRootPath = EXT:vendorinventoryadvanced/Resources/Private/Partials/
    # cat=plugin.tx_vendorinventoryadvanced_vendorinventoryfe/file; type=string; label=Path to template layouts (FE)
    layoutRootPath = EXT:vendorinventoryadvanced/Resources/Private/Layouts/
  }
  persistence {
    # cat=plugin.tx_vendorinventoryadvanced_vendorinventoryfe//a; type=string; label=Default storage PID
    storagePid =
  }
}

plugin.tx_vendorinventoryadvanced_vendorinventorycategoryfe {
  view {
    # cat=plugin.tx_vendorinventoryadvanced_vendorinventorycategoryfe/file; type=string; label=Path to template root (FE)
    templateRootPath = EXT:vendorinventoryadvanced/Resources/Private/Templates/
    # cat=plugin.tx_vendorinventoryadvanced_vendorinventorycategoryfe/file; type=string; label=Path to template partials (FE)
    partialRootPath = EXT:vendorinventoryadvanced/Resources/Private/Partials/
    # cat=plugin.tx_vendorinventoryadvanced_vendorinventorycategoryfe/file; type=string; label=Path to template layouts (FE)
    layoutRootPath = EXT:vendorinventoryadvanced/Resources/Private/Layouts/
  }
  persistence {
    # cat=plugin.tx_vendorinventoryadvanced_vendorinventorycategoryfe//a; type=string; label=Default storage PID
    storagePid =
  }
}

module.tx_vendorinventoryadvanced_vendorinventorybe {
  view {
    # cat=module.tx_vendorinventoryadvanced_vendorinventorybe/file; type=string; label=Path to template root (BE)
    templateRootPath = EXT:vendorinventoryadvanced/Resources/Private/Backend/Templates/
    # cat=module.tx_vendorinventoryadvanced_vendorinventorybe/file; type=string; label=Path to template partials (BE)
    partialRootPath = EXT:vendorinventoryadvanced/Resources/Private/Backend/Partials/
    # cat=module.tx_vendorinventoryadvanced_vendorinventorybe/file; type=string; label=Path to template layouts (BE)
    layoutRootPath = EXT:vendorinventoryadvanced/Resources/Private/Backend/Layouts/
  }
  persistence {
    # cat=module.tx_vendorinventoryadvanced_vendorinventorybe//a; type=string; label=Default storage PID
    storagePid =
  }
}

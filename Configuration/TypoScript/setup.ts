
plugin.tx_vendorinventoryadvanced_vendorinventoryfe {
  view {
    templateRootPaths.0 = EXT:vendorinventoryadvanced/Resources/Private/Templates/
    templateRootPaths.1 = {$plugin.tx_vendorinventoryadvanced_vendorinventoryfe.view.templateRootPath}
    partialRootPaths.0 = EXT:vendorinventoryadvanced/Resources/Private/Partials/
    partialRootPaths.1 = {$plugin.tx_vendorinventoryadvanced_vendorinventoryfe.view.partialRootPath}
    layoutRootPaths.0 = EXT:vendorinventoryadvanced/Resources/Private/Layouts/
    layoutRootPaths.1 = {$plugin.tx_vendorinventoryadvanced_vendorinventoryfe.view.layoutRootPath}
  }
  persistence {
    storagePid = {$plugin.tx_vendorinventoryadvanced_vendorinventoryfe.persistence.storagePid}
    #recursive = 1
  }
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
}

plugin.tx_vendorinventoryadvanced_vendorinventorycategoryfe {
  view {
    templateRootPaths.0 = EXT:vendorinventoryadvanced/Resources/Private/Templates/
    templateRootPaths.1 = {$plugin.tx_vendorinventoryadvanced_vendorinventorycategoryfe.view.templateRootPath}
    partialRootPaths.0 = EXT:vendorinventoryadvanced/Resources/Private/Partials/
    partialRootPaths.1 = {$plugin.tx_vendorinventoryadvanced_vendorinventorycategoryfe.view.partialRootPath}
    layoutRootPaths.0 = EXT:vendorinventoryadvanced/Resources/Private/Layouts/
    layoutRootPaths.1 = {$plugin.tx_vendorinventoryadvanced_vendorinventorycategoryfe.view.layoutRootPath}
  }
  persistence {
    storagePid = {$plugin.tx_vendorinventoryadvanced_vendorinventorycategoryfe.persistence.storagePid}
    #recursive = 1
  }
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
}

plugin.tx_vendorinventoryadvanced._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-vendorinventoryadvanced table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-vendorinventoryadvanced table th {
        font-weight:bold;
    }

    .tx-vendorinventoryadvanced table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)

# Module configuration
module.tx_vendorinventoryadvanced_web_vendorinventoryadvancedvendorinventorybe {
  persistence {
    storagePid = {$module.tx_vendorinventoryadvanced_vendorinventorybe.persistence.storagePid}
  }
  view {
    templateRootPaths.0 = EXT:vendorinventoryadvanced/Resources/Private/Backend/Templates/
    templateRootPaths.1 = {$module.tx_vendorinventoryadvanced_vendorinventorybe.view.templateRootPath}
    partialRootPaths.0 = EXT:vendorinventoryadvanced/Resources/Private/Backend/Partials/
    partialRootPaths.1 = {$module.tx_vendorinventoryadvanced_vendorinventorybe.view.partialRootPath}
    layoutRootPaths.0 = EXT:vendorinventoryadvanced/Resources/Private/Backend/Layouts/
    layoutRootPaths.1 = {$module.tx_vendorinventoryadvanced_vendorinventorybe.view.layoutRootPath}
  }
}

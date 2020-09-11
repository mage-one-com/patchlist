# Patch List Overview

This module shows a list of all installed patches from [mage-one.com](https://mage-one.com/)

# Install

### with composer

1. Add the repository with the module:

        "repositories": [
            {
                "type": "vcs",
                "url": "git@github.com:mage-one-com/patchlist.git"
            }
        ],

2. `composer require mage_one_com/patchlist`

### with modman

    modman clone git@github.com:mage-one-com/patchlist.git

### manually
[Download zip file](https://github.com/mage-one-com/patchlist/archive/master.zip) and copy the files from inside the `src` folder into your magento root directory

## Clean cache/run install scripts

In order to see the page, logout and login again.

# Usage

You can find the list of installed patches in `System > Tools > Mage One Patch List`

# Uninstall
## with composer
- Remove module from `composer.json` and rerun `composer update mageone/patchlist`

## with modman or manually
- Remove the files from your installation

# Contribution

Please send your contribution as a pull request against our develop branch.

# Developer

This module is under development by Mage One (https://mage-one.com) a service of Paddox GmbH, Germany (https://mage-one.com/imprint)

# License

Patchlist is licensed under a modified BSD 3-clause License (according to german law)

Copyright 2020 Paddox GmbH, Germany

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.

2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

3. Neither the name of the copyright holder nor the names of its contributors may be used to endorse or promote products derived from this software without specific prior written permission.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS". NO CONTRIBUTER SHALL BE LIABLE FOR DAMAGES ARISING FROM CAUSES OTHER THEN THE DETRIMENT TO LIFE, BODY AND HEALTH ONLY TO THE EXTENT SUCH DAMAGES ARISES FROM WILFUL MISCONDUCT, GROSS NEGLIGENCE OR THE CULPABLE VIOLATION OF A FUNDAMENTAL CONTRACTUAL OBLIGATION ON THE PART OF THE CONTRIBUTOR OR ANY VICARIOUS AGENTS. ANY FURTHER LIABILITY FOR DAMAGES SHALL BE EXCLUDED, ESPECIALLY LIABILITY FOR THE LOSS OF DATA AND THE RECOVERY OF THIS DATA IF THIS LOSS COULD HAVE BEEN AVOIDED BY THE SOFTWARE USER THROUGH APPROPRIATE PRECAUTIONARY MEASUERS, IN PARTICULAR BY CREATING DAILY BACKUPS OF ALL DATA. THE PROVISIONS OF THE GERMAN PRODUCT LIABILITY ACT AND OTHER MANDATORY LEGAL STATUTES SHALL REMAIN UNAFFECTED.









 

import { config, library, dom } from '@fortawesome/fontawesome-svg-core'

config.autoReplaceSvg = 'nest'

import { faCaretUp, faCaretDown, faStar, faCheck, faPlusSquare } from '@fortawesome/free-solid-svg-icons'

library.add(faCaretUp, faCaretDown, faCheck, faStar, faPlusSquare);

import { faFacebook, faTripadvisor, faTwitter } from '@fortawesome/free-brands-svg-icons'
library.add(faFacebook, faTripadvisor, faTwitter);

// import {faPlusSquare} from '@fortawesome/free-regular-svg-icons'
// library.add(faPlusSquare);
dom.watch()

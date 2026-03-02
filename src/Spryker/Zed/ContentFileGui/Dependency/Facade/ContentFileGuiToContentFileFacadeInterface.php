<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ContentFileGui\Dependency\Facade;

use Generated\Shared\Transfer\ContentFileListTermTransfer;
use Generated\Shared\Transfer\ContentValidationResponseTransfer;

interface ContentFileGuiToContentFileFacadeInterface
{
    public function validateContentFileListTerm(
        ContentFileListTermTransfer $contentFileListTermTransfer
    ): ContentValidationResponseTransfer;
}

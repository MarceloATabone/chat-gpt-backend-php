<?php

namespace App\Http\Controllers;

class SwaggerAnnotationsController extends Controller
{
    public function getAnnotations()
    {
        return <<<'EOD'
            /**
             * @OA\Info(
             *     title="{$this->getAppName()}",
             *     version="1.0.0",
             *     description="",
             *     termsOfService="https://example.com/terms/",
             *     @OA\Contact(
             *         email="example@example.com"
             *     ),
             *     @OA\License(
             *         name="Apache 2.0",
             *         url="https://www.apache.org/licenses/LICENSE-2.0.html"
             *     )
             * )
             */
        EOD;
    }
}

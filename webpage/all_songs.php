            <?php
				$files = glob("*songs/*.mp3");

				foreach($files as $file){
					$fileName = basename($file);
					$fileSize = filesize($file);

                    $fileSizeName;

                    if ($fileSize >= 0 && $fileSize < 1024) {
                        $fileSizeName = "b";
                    } elseif ($fileSize >= 1024 && $fileSize < 1048576) {
                        $fileSize = round($fileSize / 1024, 2);
                        $fileSizeName = "kb";
                    } else {
                        $fileSize = round($fileSize / 1048576, 2);
                        $fileSizeName = "mb";
                    }
			?>
				<li class="mp3item">
					<a href=<?= $file ?>><?= $fileName ?></a>
					( <?=$fileSize." ".$fileSizeName ?> )
				</li>
				<?php } ?>

				<?php
				$files = glob("*songs/*.txt");

				foreach($files as $file){
					$fileName = basename($file);
					$fileSize = filesize($file);
				?>
				<li class="playlistitem">
					<a href=<?= "?playlist=".$fileName?>><?= $fileName ?></a>
				</li>
				<?php } ?>
<?php
function countHtmlFiles($directory)
{
    $htmlFilesCount = 0; // 初始化计数器

    // 打开目录
    if ($handle = opendir($directory)) {
        while (($item = readdir($handle)) !== false) {
            // 跳过当前目录(.)和上级目录(..)
            if ($item !== "." && $item !== "..") {
                $path = $directory . '/' . $item;
                if (is_dir($path)) {
                    // 如果是子目录，递归调用函数
                    $htmlFilesCount += countHtmlFiles($path);
                } elseif (pathinfo($path, PATHINFO_EXTENSION) === 'html') {
                    // 如果是HTML文件，计数器加1
                    $htmlFilesCount++;
                }
            }
        }
        closedir($handle); // 关闭目录句柄
    }

    return $htmlFilesCount; // 返回统计结果
}

// 设置要统计的目录，默认为当前目录
$directory = './';
$totalHtmlFiles = countHtmlFiles($directory);

echo "本站共有<span style='color: blue;'>$totalHtmlFiles</span>个页面";
?>
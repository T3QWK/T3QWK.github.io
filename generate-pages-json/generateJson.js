const fs = require('fs');
const path = require('path');

// 递归遍历目录，找到所有HTML文件
function getHtmlFiles(dir) {
    let files = [];
    const items = fs.readdirSync(dir, { withFileTypes: true });

    for (const item of items) {
        const fullPath = path.join(dir, item.name);
        if (item.isDirectory()) {
            files = files.concat(getHtmlFiles(fullPath));
        } else if (item.name.endsWith('.html')) {
            files.push(fullPath.replace(dir, '')); // 去掉根目录路径
        }
    }

    return files;
}

// 根目录路径（根据你的网站结构调整）
const rootDir = 'E:\\T3QWK.github.io'; // 使用绝对路径

// 获取所有HTML文件路径
const htmlFiles = getHtmlFiles(rootDir);

// 生成JSON文件
const outputJson = path.join(__dirname, 'pages.json');
fs.writeFileSync(outputJson, JSON.stringify(htmlFiles, null, 2));

console.log(`Generated pages.json with ${htmlFiles.length} HTML files.`);
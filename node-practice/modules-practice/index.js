import { readdirSync, readFileSync, writeFileSync } from 'fs';
import { join } from 'path';

function concatenateCSSFilesInFolder(folderPath, outputFile) {
  try {
    // Read all files in the folder
    const files = readdirSync(folderPath);

    // Initialize an empty string to store the concatenated content
    let concatenatedContent = '';

    // Iterate through the files and concatenate their contents
    for (const file of files) {
      const filePath = join(folderPath, file);
      const fileContent = readFileSync(filePath, 'utf-8');
      concatenatedContent += fileContent;
    }

    // Write the concatenated content to the output file as a string
    writeFileSync(outputFile, concatenatedContent, 'utf-8');

    console.log('CSS files concatenated and saved to', outputFile);
  } catch (err) {
    console.error('Error:', err);
  }
}

// Usage: Provide the path to the folder and the output CSS file name
const folderPath = './css'; // Change to your folder path
const outputFile = './minified-css.css'; // Change to your desired output CSS file name

concatenateCSSFilesInFolder(folderPath, outputFile);

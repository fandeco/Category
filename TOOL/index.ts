// noinspection JSNonASCIINames

import fs                                        from "fs";
import path                                      from "path";
import {GoogleSpreadsheet, GoogleSpreadsheetRow} from "google-spreadsheet";
import {exec}                                    from "child_process";

const start = async () => {
	const api                  = JSON.parse(fs.readFileSync(path.join(__dirname, 'apikey.json'), 'utf-8'));
	const client_email: string = api.client_email;
	const private_key: string  = api.private_key;

	const doc = new GoogleSpreadsheet('1tKIDh4Lo4LjGdXGw5-UzO8ZCRkCDkNYMw4wjB3sU7MM');
	await doc.useServiceAccountAuth({
										client_email,
										private_key
									}).catch(console.error);
	await doc.loadInfo().catch(console.error);
	console.log(doc.title);
	const categories = doc.sheetsByTitle['категории'];
	const rows       = await categories.getRows();
	let category     = ''
	let subCategory  = ''
	let template     = ''
	let feature      = ''
	let installType  = ''
	let singular     = ''

	const output: {
		category: string
		subCategory: string
		template: string
		feature: string
		installType: string
		singular: string
	}[] = []
	rows.forEach((row: GoogleSpreadsheetRow) => {
		if (!row['Вид светильника интернет']) {
			return false;
		}
		category    = row['Тип товара интернет'] || category
		subCategory = row['Вид светильника интернет'] || subCategory
		template    = row['Шаблон Наименования'] || template
		feature     = row['Доп.фильтры'] || feature
		installType = row['Тип монтажа/установки'] || installType
		singular    = row['Единственное число для товара'] || singular
		output.push({
						category,
						subCategory,
						template,
						feature,
						installType,
						singular
					})
	})
	const php = path.join(__dirname, 'converter.php')
	fs.writeFileSync(path.join(__dirname, 'output.json'), JSON.stringify(output))
	exec(`php ${php}`);
	// fs.unlinkSync(path.join(__dirname, 'output.json'));
}
start().catch(console.error);

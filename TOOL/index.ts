import fs   from "fs";
import path from "path";
import {GoogleSpreadsheet} from "google-spreadsheet";

const start = async () => {
	const api                  = JSON.parse(fs.readFileSync(path.join(__dirname, 'apikey.json'), 'utf-8'));
	const client_email: string = api.client_email;
	const private_key: string  = api.private_key;

	const doc = new GoogleSpreadsheet('1tKIDh4Lo4LjGdXGw5-UzO8ZCRkCDkNYMw4wjB3sU7MM');
	await doc.useServiceAccountAuth({
										client_email,
										private_key
									});
	await doc.loadInfo();

	const categories = doc.sheetsByTitle['категории'];

}

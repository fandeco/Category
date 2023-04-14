"use strict";
var __awaiter = (this && this.__awaiter) || function (thisArg, _arguments, P, generator) {
    function adopt(value) { return value instanceof P ? value : new P(function (resolve) { resolve(value); }); }
    return new (P || (P = Promise))(function (resolve, reject) {
        function fulfilled(value) { try { step(generator.next(value)); } catch (e) { reject(e); } }
        function rejected(value) { try { step(generator["throw"](value)); } catch (e) { reject(e); } }
        function step(result) { result.done ? resolve(result.value) : adopt(result.value).then(fulfilled, rejected); }
        step((generator = generator.apply(thisArg, _arguments || [])).next());
    });
};
var __importDefault = (this && this.__importDefault) || function (mod) {
    return (mod && mod.__esModule) ? mod : { "default": mod };
};
Object.defineProperty(exports, "__esModule", { value: true });
const fs_1 = __importDefault(require("fs"));
const path_1 = __importDefault(require("path"));
const google_spreadsheet_1 = require("google-spreadsheet");
const start = () => __awaiter(void 0, void 0, void 0, function* () {
    const api = JSON.parse(fs_1.default.readFileSync(path_1.default.join(__dirname, 'apikey.json'), 'utf-8'));
    const client_email = api.client_email;
    const private_key = api.private_key;
    const doc = new google_spreadsheet_1.GoogleSpreadsheet('1tKIDh4Lo4LjGdXGw5-UzO8ZCRkCDkNYMw4wjB3sU7MM');
    yield doc.useServiceAccountAuth({
        client_email,
        private_key
    });
    yield doc.loadInfo();
    const categories = doc.sheetsByTitle['категории'];
});

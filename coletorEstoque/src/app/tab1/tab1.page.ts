import { Component } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { BarcodeScanner, BarcodeScannerOptions } from '@ionic-native/barcode-scanner/ngx';

import { FormValidators } from '../enum/form-validators.enum';
import { HttpService } from '../service/http.service';

@Component({
  selector: 'app-tab1',
  templateUrl: 'tab1.page.html',
  styleUrls: ['tab1.page.scss'],
})
export class Tab1Page {
  public ionicForm: FormGroup;
  public isSubmitted = false;
  public list: Array<any>;

  constructor(private barcodeScanner: BarcodeScanner, private fb: FormBuilder, private http: HttpService) {
    this.ionicForm = this.fb.group({
      idEstoque: [0],
      idProduto: ['', Validators.required],
      qtde: ['', Validators.required],
    });

    this.all();
  }

  scanner() {
    const options: BarcodeScannerOptions = {
      // preferFrontCamera: false,
      showFlipCameraButton: true,
      showTorchButton: true,
      torchOn: false,
      prompt: 'Place a barcode inside the scan area',
      resultDisplayDuration: 500,
      // formats: 'QR_CODE,PDF_417',
      // orientation: 'landscape',
    };

    this.barcodeScanner
      .scan(options)
      .then((barcodeData) => {
        alert('Barcode data' + JSON.stringify(barcodeData));
      })
      .catch((err) => {
        alert('Error' + JSON.stringify(err));
      });
  }

  async all() {
    this.list = await this.http.get('produto/');
  }

  get frmValidators() {
    return FormValidators;
  }

  get f(): any {
    return this.ionicForm.controls;
  }

  get v(): any {
    return this.ionicForm.value;
  }

  async onSubmit(): Promise<void> {
    this.isSubmitted = true;

    if (this.ionicForm.invalid) {
      return;
    }

    const obj: any = this.v;
    obj.ativo = 1;
    const result: any = await this.http.post('estoque/', obj);

    if (result.status) {
      alert('OK');
    } else {
      alert(result.msg);
    }
  }
}

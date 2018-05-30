import { Component } from '@angular/core';
import { IpData, IpDataService } from './ipdata.service';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css'],
  providers: [ IpDataService ]
})
export class AppComponent {
  title  = 'Dashboard';
  ipData = [];
  subnet = null;

  constructor(private ipDataService: IpDataService) { }

  showData(): void {
    this.ipData = []; // Reset the array for each call
    this.ipDataService.getData().subscribe(
      (data: IpData[]) => this.ipData = data
    );
  }

  setSubnet(mainIp, ipInfo): void {
    this.subnet = {
      'ip': mainIp,
      'subnet': ipInfo.ip,
      'address': ipInfo.address_tag
    };
  }
}

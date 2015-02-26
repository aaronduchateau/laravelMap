window.translations = {
	held: {},
	JacksonCounty: {
		translate: function(o) {
			if (o.ASSESIMP && o.ASSESLAND){
				var assesedTaxableValue = o.ASSESIMP.value + o.ASSESLAND.value;
			} else {
				var assesedTaxableValue = null;
			}
			//query on ACCOUNT, queryVal holds actual query val
			var tempJson = {
				mapNumber: o.MAPNUMBER,
				account: o.ACCOUNT,
				taxcode: o.TAXCODE,
				inCareOf: o.INCAREOF,
				ownerAddress1: o.SITEADD,
				ownerAddress2: o.ADDRESS1,
				ownerAddress3: o.ADDRESS2,
				ownerCity: o.CITY,
				ownerState: o.STATE,
				ownerZip: o.ZIPCODE,
				numberOwners: null,
				ownerName: o.FEEOWNER,
				impValue: o.IMPVALUE,
				landValue: o.LANDVALUE,
				yearBuilt: o.YEARBLT,
				taxLot: o.TAXLOT,
				buildingType: null,
				exemptDescription: null,
				propertyClassCode: o.PROPCLASS,
				propertyClassDescription: null,
				stateClassCodeOrBuildCode: o.BUILDCODE,
				stateClassDescription: null,
				acreage: o.ACREAGE,
				assesedtaxableValue: {value: assesedTaxableValue},
				assesedImpTaxable: o.ASSESIMP,
				assesedLandTaxable: o.ASSESLAND,
				mapTaxLotNumber: o.TM_MAPLOT,
				zoning: null,
				landUseNumber: null,
				planDescription: null,
				fireDistrict: null,
				schoolDistrict: null,
				nieghborHood: o.NEIGHBORHO,
				queryVal: o.ACCOUNT
			};

			window.translations.held = tempJson;
			return tempJson;

		}
	},
	LaneCounty: {
		translate: function(o) {
			//query on maptaxlot, queryVal holds actual query val
			var tempJson = {
				mapNumber: o.mapnumber,
				account: o.acctno,
				taxcode: o.taxcode,
				inCareOf: null,
				ownerAddress1: o.addr1,
				ownerAddress2: o.addr2,
				ownerAddress3: o.addr3,
				ownerCity: o.ownercity,
				ownerState: o.ownerprvst,
				ownerZip: o.ownerzip,
				numberOwners: o.numowners,
				ownerName: o.ownname,
				impValue: o.impval,
				landValue: o.landval,
				yearBuilt: o.yearblt,
				taxLot: o.taxlot,
				buildingType: o.bldgtype,
				exemptDescription: o.exemptdesc,
				propertyClassCode: o.propcl,
				propertyClassDescription: o.propcldes,
				stateClassCodeOrBuildCode: o.statecl,
				stateClassDescription: o.statecldes,
				acreage: null,
				assesedtaxableValue: o.assdtotval,
				assesedImpTaxable: null,
				assesedLandTaxable: null,
				mapTaxLotNumber: o.maptaxlot,
				zoning: o.zoning,
				landUseNumber: o.numlanduse,
				planDescription: o.plandesc,
				fireDistrict: o.firedist,
				schoolDistrict: o.schooldist,
				nieghborHood: o.nieghbor,
				queryVal: o.maptaxlot
			};

			window.translations.held = tempJson;
			return tempJson;

		}
	}
};